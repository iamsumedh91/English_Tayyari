<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function logomanager()
    {
    	return view('admin.logomanager');
    }

    public function postlogo(Request $request)
    {
    	$this->validate($request, [
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   		$image = $request->file('logo_image');
        $input['logo_image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['logo_image']);

        $data=array('logo_image'=> $input['logo_image']);	
      	DB::table('logo')->insert($data);

      	return redirect()->back()->with('success', 'Yeah!! Logo has been successfully updated');
    }


     public function sitesetting()
    {
    	return view('admin.sitesetting');
    }

    public function postsetting()
    {
    	$this->validate($request, [
            'title'=>'required',
            'subtitle' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $title      =$request->input('title');
        $subtitle	=$request->input('subtitle');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('title'=>$title,'subtitle'=>$subtitle,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'practice');
        DB::table('sitesetting')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Sub-Category successfully added');
    }

}
