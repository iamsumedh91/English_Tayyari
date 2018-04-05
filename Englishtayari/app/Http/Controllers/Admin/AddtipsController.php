<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddtipsController extends Controller
{
    public function addtip(Request $request)

    {
    	$title = $request->input('title');
    	$description=$request->input('description');
        $example1 = $request->input('example_1');
        $example2 = $request->input('example_2');
        $date_input = $request->input('date');
    	$date=date('y/m/d');

    	$data=array('title'=>$title,'description'=>$description,'example_1'=>$example1,'example_2'=>$example2,'date'=>$date_input,'created_at'=>$date);	
    	DB::table('dailytips')->insert($data);

    	return redirect()->back()->with('success', 'Yeah!! Daily Tip has been successfully submitted');

    }

    public function viewtip()
    {
    	$dailytips = DB::table('dailytips')->get();

        return view('admin.viewdailytips')->with('data',$dailytips);

    }

    public function destroy($id)
    {
        DB::table("dailytips")->delete($id);
        return redirect()->back()->with('info','Tip deleted');
    }

    public function edit($id)
    {

    	$dailytips= DB::table('dailytips')->where('id',$id)->get();
        return view('admin.editdailytips')->with('data',$dailytips);;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'example_1' => 'required',
            'example_2' => 'required',
            'date' => 'required',
        ]);
        DB::table('dailytips')->where('id',$id)->update($request->except(['_token']));
        return redirect()->back()->with('info','Tip updated successfully');
    }

}
