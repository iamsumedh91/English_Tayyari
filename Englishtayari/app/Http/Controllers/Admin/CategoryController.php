<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function addcategory()
    {

    	return view('admin.addcategory');

    }
 
    public function postcategory(Request $request)
    {
    	$this->validate($request, [
            'category' => 'required',
            'type' => 'required'
            
        ]);

        $category	=$request->input('category');
        $subcategory	=$request->input('subcategory');
        $type	        =$request->input('type');
        $created_at     =date("Y-m-d H:i:s");
        $updated_at     =date("Y-m-d H:i:s");

        $data=array('category'=>$category,'subcategory'=>$subcategory,'type'=>$type,'created_at'=>$created_at,'updated_at'=>$updated_at);
        DB::table('categories')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Category successfully added');
    }

    public function viewcategories()
    {   $categories=DB::table('categories')->get();
    	return view('admin.allcategories')->with('categories',$categories);
    }

    public function editcategory($id)
    {
        $category = DB::table('categories')->where('id',$id)->get();
    	return view('admin.editcategory')->with('data', $category);
    }

    public function updatecategory(Request $request,$id)
    {
    	$this->validate($request, [
            'category' => 'required',
            'type' => 'required'
            
        ]);

        $category	=$request->input('category');
        $subcategory	=$request->input('subcategory');
        $type	        =$request->input('type');
        $updated_at     =date("Y-m-d H:i:s");

        $data=array('category'=>$category,'subcategory'=>$subcategory,'type'=>$type, 'updated_at' => $updated_at);
        DB::table('categories')->where('id',$id)->update($data);
        return redirect()->back()->with('success', 'Yeah!! Category successfully updated');
    }

    public function destroycategory($id)
    {
    	DB::table("category")->delete($id);
        return redirect()->back()->with('success','Category Deleted');
    }

}