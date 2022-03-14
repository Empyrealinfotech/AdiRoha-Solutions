<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogTag;

class AjaxController extends Controller{

	public function categoryList(Request $request){
	    $search  = ($request->has('search') && $request->search!='')?$request->search:'';
	    $query   = BlogCategory::query();
	    if($search!=''){
	        $query->where('name','LIKE','%'.$search.'%');
	    }
	    $records = $query->limit(150)->get();
	    $data    = [];
	    foreach ($records as $key => $row) {
	        $data[]     = array('id'=>$row->id,'text'=>$row->name);
	    }
	    return response()->json($data);
	}

	public function categorySelect(Request $request){
	    $row     = BlogCategory::query()->where('id',$request->id)->first();
	    $data['success']        = false;
	    if($row){
	        $data['success']    = true;
	        $data['id']         = $row->id;
	        $data['text']       = $row->name;
	    }
	    return response()->json($data);
	}

	public function tagList(Request $request){
	    $search  = ($request->has('search') && $request->search!='')?$request->search:'';
	    $query   = BlogTag::query();
	    if($search!=''){
	        $query->where('name','LIKE','%'.$search.'%');
	    }
	    $records = $query->limit(150)->get();
	    $data    = [];
	    foreach ($records as $key => $row) {
	        $data[]     = array('id'=>$row->id,'text'=>$row->name);
	    }
	    return response()->json($data);
	}

	public function tagSelect(Request $request){
	    $row     = BlogTag::query()->where('id',$request->id)->first();
	    $data['success']        = false;
	    if($row){
	        $data['success']    = true;
	        $data['id']         = $row->id;
	        $data['text']       = $row->name;
	    }
	    return response()->json($data);
	}

}
