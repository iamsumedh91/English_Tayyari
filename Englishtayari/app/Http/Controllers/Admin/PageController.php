<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function addpages()
    {
    	return view('admin.addpage');
    }

    public function showpages()
    {
    	$pages=DB::table('pages')->get();
    	return view('admin.pages')->with('data',$pages);
    }

    public function viewpage(Request $request,$id)
    {
    	$pages=DB::table('pages')->get();
    	return view('admin.viewpage')->with('data',$pages);
    }


    public function postpagecontent(Request $request)
    {
    	$this->validate($request, [
            'title' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'pagecontent' => 'required',
        ]);

    	$title=$request->input('title');
    	//$subtitle=$request->input('subtitle');
    	$metatitle=$request->input('metatitle');
    	$keyword=$request->input('keywords');
    	$description=$request->input('description');
    	$pagecontent=$request->input(htmlentities('pagecontent'));

    	$data=array('title'=>$title,'metatitle'=>$metatitle,'keyword'=>$keyword,'description'=>$description,'pagecontent'=>$pagecontent);

    	DB::table('pages')->insert($data);

    	return redirect()->back()->with('success', 'Yeah!! Page has been successfully added');

    }

    public function editpagecontent(Request $request,$id)
    {

    	$pages=DB::table('pages')->where('id',$id)->get();

    	return view('admin.editpage')->with('data',$pages);

    }

    public function updatepagecontent(Request $request,$id)
    {

    	$this->validate($request, [
            'title' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'pagecontent' => 'required',
        ]);

    	$title=$request->input('title');
    	$metatitle=$request->input('metatitle');
    	$keyword=$request->input('keywords');
    	$description=$request->input('description');
    	$pagecontent=$request->input(htmlentities('pagecontent'));

    	DB::table('pages')->where('id',$id)->update(array('title'=>$title,'metatitle'=>$metatitle,'keyword'=>$keyword,'description'=>$description,'pagecontent'=>$pagecontent));

    	return redirect()->back()->with('info', ' Page has been successfully updated');

    }

    public function destroy(Request $request,$id)
    {
    	DB::table("pages")->delete($id);
        return redirect()->back()->with('info','Page Deleted');
    }
}
