<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function showaboutpage()
    {	
    	$content=DB::table('aboutus')->ORDERBY('id','DESC')->get();
    	return view('admin.aboutus')->with('data',$content);
    }

     public function addcontent()
    {
    	return view('admin.addaboutcontent');
    }

    public function postcontent(Request $request)
    {

    	 $this->validate($request, [
    	 	'title'=>'required',
            'content' => 'required',
            
        ]);
    	 $title=$request->input('title');
    	 $content=$request->input(htmlentities('content'));
    	 $data=array('title'=>$title,'content'=>$content);
    	 DB::table('aboutus')->insert($data);

    	 return redirect()->back()->with('success', 'Yeah!! Content Successfully Added');

    }

    public function editcontent($id)
    {

    		$about=DB::table('aboutus')->where('id',$id)->get();
    		return view('admin.editaboutus')->with('data',$about);
    }

    public function update(Request $request,$id)
    {

    	$this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        DB::table('aboutus')->where('id',$id)->update($request->except(['_token']));
        return redirect()->back()->with('info','Content updated successfully');

    }

    /**************Privacy************/


    public function showprivacypage()
    {	
    	$content=DB::table('privacy')->ORDERBY('id','DESC')->get();
    	return view('admin.privacypolicy')->with('data',$content);
    }

     public function addprivacycontent()
    {
    	return view('admin.addprivacycontent');
    }

    public function postprivacycontent(Request $request)
    {

    	 $this->validate($request, [
    	 	'title'=>'required',
            'content' => 'required',
            
        ]);
    	 $title=$request->input('title');
    	 $content=$request->input(htmlentities('content'));
    	 $data=array('title'=>$title,'content'=>$content);
    	 DB::table('privacy')->insert($data);

    	 return redirect()->back()->with('success', 'Yeah!! Content Successfully Added');

    }

    public function editprivacycontent($id)
    {

    		$privacy=DB::table('privacy')->where('id',$id)->get();
    		return view('admin.editprivacypolicy')->with('data',$privacy);
    }


    public function updateprivacycontent(Request $request,$id)
    {

    	$this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);
        DB::table('privacy')->where('id',$id)->update($request->except(['_token']));
        return redirect()->back()->with('info','Content updated successfully');

    }
}
