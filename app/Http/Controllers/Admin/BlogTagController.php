<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\BlogTag;

use DataTables;
use Validator;
use Session;
use Image;
use Auth;
use File;

class BlogTagController extends Controller{

    public function __construct(){
        $this->middleware(['auth','verified']);
    }

    public function index(){
        try {
            $data = [];
            $data['page_title']         = 'Blog Tag List';
            $data['btnadd'][]           = array(
                'link'          => route('control.panel.blog.tags.add'),
                'title'         => 'Add Blog Tag'
            );
            $data['breadcrumb'][]       = array(
                    'link'      => route('control.panel.home'),
                    'title'     => 'Home'
                );
            $data['breadcrumb'][]       = array(
                'title'         => 'Blog Tag List'
            );
            return view('admin.blog_tags.index',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function datatable(Request $request){
        $item = BlogTag::query();
        return Datatables::eloquent($item)
            ->addColumn('action', function($item) {
                $action  = '';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="'.route("control.panel.blog.tags.view",$item->id).'"><i class="ti-eye"></i></a>&nbsp;';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="'.route("control.panel.blog.tags.edit",$item->id).'"><i class="ti-pencil-alt"></i></a>&nbsp;';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="javascript:void(0);" id="blog_tag_id_'.$item->id.'" data-id="'.$item->id.'" onclick="deleteRecord(this,'.$item->id.');"><i class="ti-trash"></i></a>&nbsp;';
                return $action;
            })
            ->editColumn('image', function($item) { 
                if (isset($item->image) && $item->image!='' && File::exists(public_path('uploads/blog_tags/image/'.$item->image))) {
                    return asset('uploads/blog_tags/image/'.$item->image);
                }
                return '';
            })
            ->filterColumn('status', function ($query, $keyword) {
                if (strstr(strtolower("active"), strtolower($keyword) ) !== false) {
                    $query->whereRaw("blog_tags.status = 1");
                }elseif (strstr(strtolower("inactive"), strtolower($keyword) ) !== false) {
                    $query->whereRaw("blog_tags.status = 0");
                }
            })
            ->editColumn('created_at', function($item) {
                return ($item->created_at)?date('d-m-Y', strtotime($item->created_at)):'';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(blog_tags.created_at,'%d-%m-%Y') like ?", ["%$keyword%"]);
            })
            ->make(true);
    }

    public function create(){
        try {
            $data['page_title']         = 'Add Blog Tag';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                    'link'  => route('control.panel.blog.tags'),
                    'title' => 'Blog Tag'
                );
            $data['breadcrumb'][]       = array(
                    'title' => 'Add'
                );
            return view('admin.blog_tags.add',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function exists(Request $request){
        $slug       = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $request->name);
        $slug       = Str::slug($slug, "-");
        $itemId     = ($request->id)?$request->id:'';
        if($itemId!=''){
            $result = BlogTag::where('id', '!=' , $request->id)->where('slug',$slug)->count();
        }else{
            $result = BlogTag::where('slug',$slug)->count();
        }
        if($result>0){
            return response()->json(false);
        }else{
            return response()->json(true);
        }
    }

    public function store(Request $request){
        $itemId         = ($request->id)?$request->id:'';
        try {
            $rules      = [
                //'status'              => 'required'
            ];
            if ($itemId!='') {
                $rules['name']          = 'required|unique:blog_tags,name,'.$itemId.',id,deleted_at,NULL';
                $rules['image']         = 'image|mimes:jpg,jpeg,png,gif|max:5024';
            }else{
                $rules['name']          = 'required|unique:blog_tags,name,NULL,id,deleted_at,NULL';
                $rules['image']         = 'image|mimes:jpg,jpeg,png,gif|max:5024';
            }
            $messages   = [
                'name.required'         => 'The blog Tag name field is required.',
                'status.required'       => 'The status field is required.'
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                if ($itemId!='') {
                    return redirect()->route('control.panel.blog.tags.edit',$itemId)
                                ->withErrors($validator)
                                ->withInput();
                }else{
                    return redirect()->route('control.panel.blog.tags.add')
                                ->withErrors($validator)
                                ->withInput();
                }
            } else {
                $formdata                   = $request->all();
                unset($formdata['_token']);
                unset($formdata['id']);
                if ($itemId!='') {
                    $item                   = BlogTag::find($itemId);
                    if($request->hasFile('image')){
                        $file               = $request->file('image');
                        if(!File::exists(public_path('uploads/blog_tags/image'))){
                            File::makeDirectory(public_path('uploads/blog_tags/image'), $mode = 0777, true, true);
                        }
                        if(!File::exists(public_path('uploads/blog_tags/image/thumbnail'))){
                            File::makeDirectory(public_path('uploads/blog_tags/image/thumbnail'), $mode = 0777, true, true);
                        }
                        $image              = generateFileName($file->extension());
                        if($image!=''){
                            if (isset($item->image) && $item->image!='' && File::exists(public_path("uploads/blog_tags/image/".$item->image))) {
                                unlink(public_path("uploads/blog_tags/image/".$item->image));
                                unlink(public_path("uploads/blog_tags/image/thumbnail/".$item->image));
                            }
                            Image::make($file)->save(public_path('uploads/blog_tags/image/'.$image));

                            $img            = Image::make($file->getRealPath());
                            $img->resize(770, 400)->save(public_path('uploads/blog_tags/image/thumbnail/'.$image));
                            $item->image    = $image;
                        }
                    }
                    foreach ($formdata as $fieldName => $fieldValue) {
                        if(!$request->hasFile($fieldName)){
                            $item->$fieldName = $fieldValue;  
                        }
                    }
                    $item->slug             = Str::slug(preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $request->name), "-");
                    $item->updated_at       = date("Y-m-d H:i:s");
                    $item->updated_by       = Auth::id();
                    if ($item->save()) {
                        Session::flash('alert-message', 'Blog Tag updated successfully.');
                        Session::flash('alert-class', 'success');
                        return redirect()->route('control.panel.blog.tags');
                    } else {
                        Session::flash('alert-message', 'Blog Tag updated unsuccessfully.');
                        Session::flash('alert-class', 'error');
                        return redirect()->route('control.panel.blog.tags.edit', $itemId);
                    }
                } else {
                    $item                   = new BlogTag();
                    $image                  = null;
                    if($request->hasFile('image')){
                        $file               = $request->file('image');
                        if(!File::exists(public_path('uploads/blog_tags/image'))){
                            File::makeDirectory(public_path('uploads/blog_tags/image'), $mode = 0777, true, true);
                        }
                        if(!File::exists(public_path('uploads/blog_tags/image/thumbnail'))){
                            File::makeDirectory(public_path('uploads/blog_tags/image/thumbnail'), $mode = 0777, true, true);
                        }
                        $image              = generateFileName($file->extension());
                        if($image!=''){
                            Image::make($file)->save(public_path('uploads/blog_tags/image/'.$image));

                            $img            = Image::make($file->getRealPath());
                            $img->resize(770, 400)->save(public_path('uploads/blog_tags/image/thumbnail/'.$image));
                        }
                    }
                    $formdata['image']      = $image;
                    $formdata['slug']       = Str::slug(preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $request->name), "-");
                    $formdata['created_at'] = date("Y-m-d H:i:s");
                    $formdata['created_by'] = Auth::id();
                    if ($item->create($formdata)) {
                        Session::flash('alert-message', 'Blog Tag added successfully.');
                        Session::flash('alert-class', 'success');
                        return redirect()->route('control.panel.blog.tags');
                    } else {
                        Session::flash('alert-message', 'Blog Tag added unsuccessfully.');
                        Session::flash('alert-class', 'error');
                        return redirect()->route('control.panel.blog.tags.add');
                    }
                }
            }
        } catch (\Exception $e) {
            Session::flash('alert-message',$e->getMessage());
            Session::flash('alert-class','error');
            return redirect()->route('control.panel.blog.tags');
        }
    }

    public function show($id){
        try {
            $data['page_title']         = 'View Blog Tag';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.blog.tags'),
                'title'     => 'Blog Tag'
            );
            $data['breadcrumb'][]       = array(
                    'title' => 'View'
                );
            $item                       = BlogTag::where('id',$id)->first();
            if($item){
                $data['item']           = $item;
                return view('admin.blog_tags.view',$data);
            }else{
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function edit($id){
        try {
            $data['page_title']         = 'Edit Blog Tag';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.blog.tags'),
                'title'     => 'Blog Tag'
            );
            $data['breadcrumb'][]       = array(
                    'title' => 'Edit'
                );
            $item                       = BlogTag::where('id',$id)->first();
            if($item){
                $data['item']           = $item;
                return view('admin.blog_tags.add',$data);
            }else{
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function destroy(Request $request){
        if ($request->ajax()) {
            try {
                $item                               = BlogTag::where('id',$request->id)->first();
                if(!is_null($item)){
                    $item->deleted_by               = Auth::id();
                    $item->save();
                    if($item->delete()){
                        $response['success']        = true;
                        $response['message']        = "Blog Tag deleted successfully.";
                    }else{
                        $response['success']        = false;
                        $response['message']        = "Blog Tag deleted unsuccessfully.";
                    }
                }else{
                    $response['success']            = false;
                    $response['message']            = "Blog Tag record not found.";
                }
            } catch (\Exception $e) {
                $response['success']                = false;
                $response['message']                = $e->getMessage();
            }
            return response()->json($response);
        }else{
            return abort(404);
        }
    }

    public function statusChange(Request $request){
        if ($request->ajax()) {
            try {
                $item                               = BlogTag::where('id',$request->id)->first();
                if(!is_null($item)){
                    $item->status                   = $request->status;
                    $item->updated_by               = Auth::id();
                    $item->updated_at               = date("Y-m-d H:i:s");
                    if($item->save()){
                        $response['success']        = true;
                        $response['message']        = "Status has been changed successfully.";
                    }else{
                        $response['success']        = false;
                        $response['message']        = "Status has been changed unsuccessfully.";
                    }
                }else{
                    $response['success']            = false;
                    $response['message']            = "Oops! Something went wrong..";
                }
            } catch (\Exception $e) {
                $response['success']                = false;
                $response['message']                = $e->getMessage();
            }
            return response()->json($response);
        }else{
            return abort(404);
        }
    }
}
