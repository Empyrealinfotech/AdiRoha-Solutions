<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Post;

use DataTables;
use Validator;
use Session;
use Image;
use Auth;
use File;

class PostController extends Controller{

    public function __construct(){
        $this->middleware(['auth','verified']);
    }

    public function index(){
        try {
            $data = [];
            $data['page_title']         = 'Post List';
            $data['btnadd'][]           = array(
                'link'          => route('control.panel.posts.add'),
                'title'         => 'Add Post'
            );
            $data['breadcrumb'][]       = array(
                    'link'      => route('control.panel.home'),
                    'title'     => 'Home'
                );
            $data['breadcrumb'][]       = array(
                'title'         => 'Post List'
            );
            return view('admin.posts.index',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function datatable(Request $request){
        $item = Post::query();
        return Datatables::eloquent($item)
            ->addColumn('action', function($item) {
                $action  = '';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="'.route("control.panel.posts.view",$item->id).'"><i class="ti-eye"></i></a>&nbsp;';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="'.route("control.panel.posts.edit",$item->id).'"><i class="ti-pencil-alt"></i></a>&nbsp;';
                $action .= '<a class="btn btn-info btn-outline btn-circle m-r-5" href="javascript:void(0);" id="post_id_'.$item->id.'" data-id="'.$item->id.'" onclick="deleteRecord(this,'.$item->id.');"><i class="ti-trash"></i></a>&nbsp;';
                return $action;
            })
            ->editColumn('image', function($item) { 
                if (isset($item->image) && $item->image!='' && File::exists(public_path('uploads/posts/image/'.$item->image))) {
                    return asset('uploads/posts/image/'.$item->image);
                }
                return '';
            })
            ->filterColumn('status', function ($query, $keyword) {
                if (strstr(strtolower("active"), strtolower($keyword) ) !== false) {
                    $query->whereRaw("posts.status = 1");
                }elseif (strstr(strtolower("inactive"), strtolower($keyword) ) !== false) {
                    $query->whereRaw("posts.status = 0");
                }
            })
            ->editColumn('created_at', function($item) {
                return ($item->created_at)?date('d-m-Y', strtotime($item->created_at)):'';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(posts.created_at,'%d-%m-%Y') like ?", ["%$keyword%"]);
            })
            ->make(true);
    }

    public function create(){
        try {
            $data['page_title']         = 'Add Post';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                    'link'  => route('control.panel.posts'),
                    'title' => 'Post'
                );
            $data['breadcrumb'][]       = array(
                    'title' => 'Add'
                );
            return view('admin.posts.add',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function exists(Request $request){
        $slug       = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $request->name);
        $slug       = Str::slug($slug, "-");
        $itemId     = ($request->id)?$request->id:'';
        if($itemId!=''){
            $result = Post::where('id', '!=' , $request->id)->where('slug',$slug)->count();
        }else{
            $result = Post::where('slug',$slug)->count();
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
                'author'                    => 'required',
                'blog_category_id'          => 'required|array|min:1',
                //'blog_tag_id'             => 'required|array|min:1',
                'status'                    => 'required'
            ];
            if ($itemId!='') {
                $rules['name']              = 'required|unique:posts,name,'.$itemId.',id,deleted_at,NULL';
                $rules['image']             = 'image|mimes:jpg,jpeg,png,gif|max:5024';
            }else{
                $rules['name']              = 'required|unique:posts,name,NULL,id,deleted_at,NULL';
                $rules['image']             = 'required|image|mimes:jpg,jpeg,png,gif|max:5024';
            }
            $messages   = [
                'name.required'             => 'The name field is required.',
                'author.required'           => 'The author field is required.',
                'blog_category_id.required' => 'Please select at least 1 category.',
                //'blog_tag_id.required'    => 'Please select at least 1 tag.',
                'image.required'            => 'The image field is required.',
                'status.required'           => 'The status field is required.'
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                if ($itemId!='') {
                    return redirect()->route('control.panel.posts.edit',$itemId)
                                ->withErrors($validator)
                                ->withInput();
                }else{
                    return redirect()->route('control.panel.posts.add')
                                ->withErrors($validator)
                                ->withInput();
                }
            } else {
                $formdata                   = $request->all();
                unset($formdata['_token']);
                unset($formdata['id']);
                unset($formdata['blog_category_id']);
                unset($formdata['blog_tag_id']);
                if ($itemId!='') {
                    $item                   = Post::find($itemId);
                    if($request->hasFile('image')){
                        $file               = $request->file('image');
                        if(!File::exists(public_path('uploads/posts/image'))){
                            File::makeDirectory(public_path('uploads/posts/image'), $mode = 0777, true, true);
                        }
                        if(!File::exists(public_path('uploads/posts/image/thumbnail'))){
                            File::makeDirectory(public_path('uploads/posts/image/thumbnail'), $mode = 0777, true, true);
                        }
                        $image              = generateFileName($file->extension());
                        if($image!=''){
                            if (isset($item->image) && $item->image!='' && File::exists(public_path("uploads/posts/image/".$item->image))) {
                                unlink(public_path("uploads/posts/image/".$item->image));
                                unlink(public_path("uploads/posts/image/thumbnail/".$item->image));
                            }
                            Image::make($file)->save(public_path('uploads/posts/image/'.$image));

                            $img            = Image::make($file->getRealPath());
                            $img->resize(770, 400)->save(public_path('uploads/posts/image/thumbnail/'.$image));
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
                        $item->categories()->sync($request->blog_category_id);
                        //$item->tags()->sync($request->blog_tag_id);
                        Session::flash('alert-message', 'Post updated successfully.');
                        Session::flash('alert-class', 'success');
                        return redirect()->route('control.panel.posts');
                    } else {
                        Session::flash('alert-message', 'Post updated unsuccessfully.');
                        Session::flash('alert-class', 'error');
                        return redirect()->route('control.panel.posts.edit', $itemId);
                    }
                } else {
                    $item                   = new Post();
                    $image                  = null;
                    if($request->hasFile('image')){
                        $file               = $request->file('image');
                        if(!File::exists(public_path('uploads/posts/image'))){
                            File::makeDirectory(public_path('uploads/posts/image'), $mode = 0777, true, true);
                        }
                        if(!File::exists(public_path('uploads/posts/image/thumbnail'))){
                            File::makeDirectory(public_path('uploads/posts/image/thumbnail'), $mode = 0777, true, true);
                        }
                        $image              = generateFileName($file->extension());
                        if($image!=''){
                            Image::make($file)->save(public_path('uploads/posts/image/'.$image));

                            $img            = Image::make($file->getRealPath());
                            $img->resize(770,400)->save(public_path('uploads/posts/image/thumbnail/'.$image));
                        }
                    }
                    $formdata['image']      = $image;
                    $formdata['slug']       = Str::slug(preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $request->name), "-");
                    $formdata['created_at'] = date("Y-m-d H:i:s");
                    $formdata['created_by'] = Auth::id();
                    if ($item = $item->create($formdata)) {
                        $item->categories()->attach($request->blog_category_id);
                        //$item->tags()->attach($request->blog_tag_id);
                        Session::flash('alert-message', 'Post added successfully.');
                        Session::flash('alert-class', 'success');
                        return redirect()->route('control.panel.posts');
                    } else {
                        Session::flash('alert-message', 'Post added unsuccessfully.');
                        Session::flash('alert-class', 'error');
                        return redirect()->route('control.panel.posts.add');
                    }
                }
            }
        } catch (\Exception $e) {
            Session::flash('alert-message',$e->getMessage());
            Session::flash('alert-class','error');
            return redirect()->route('control.panel.posts');
        }
    }

    public function show($id){
        try {
            $data['page_title']         = 'View Post';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.posts'),
                'title'     => 'Post'
            );
            $data['breadcrumb'][]       = array(
                    'title' => 'View'
                );
            $item                       = Post::where('id',$id)->first();
            if($item){
                $data['item']           = $item;
                return view('admin.posts.view',$data);
            }else{
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function edit($id){
        try {
            $data['page_title']         = 'Edit Post';
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.home'),
                'title'     => 'Home'
            );
            $data['breadcrumb'][]       = array(
                'link'      => route('control.panel.posts'),
                'title'     => 'Post'
            );
            $data['breadcrumb'][]       = array(
                    'title' => 'Edit'
                );
            $item                       = Post::where('id',$id)->first();
            if($item){
                $data['item']           = $item;
                return view('admin.posts.add',$data);
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
                $item                               = Post::where('id',$request->id)->first();
                if(!is_null($item)){
                    $item->deleted_by               = Auth::id();
                    $item->save();
                    if($item->delete()){
                        $response['success']        = true;
                        $response['message']        = "Post deleted successfully.";
                    }else{
                        $response['success']        = false;
                        $response['message']        = "Post deleted unsuccessfully.";
                    }
                }else{
                    $response['success']            = false;
                    $response['message']            = "Post record not found.";
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
                $item                               = Post::where('id',$request->id)->first();
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
