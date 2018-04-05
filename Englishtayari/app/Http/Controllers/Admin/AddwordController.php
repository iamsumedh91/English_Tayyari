<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AddwordController extends Controller
{

    public function addailyword()
    {
        return view('admin.addailyword');
    }
    public function addword(Request $request)
    {

    	$title = $request->input('title');
    	$description=$request->input('description');
        $description_hindi=$request->input('description_hindi');
        $example_english=$request->input('example_english');
        $example_hindi=$request->input('example_hindi');
        $date_input=$request->input('date');
    	$date=date("Y/m/d");
    	
    	$data=array('title'=>$title,'description'=>$description,'description_hindi'=>$description_hindi,'example_english'=>$example_english,'example_hindi'=>$example_hindi,'date'=>$date_input,'created_at'=>$date);	
    	DB::table('dailyword')->insert($data);


    		return redirect()->back()->with('success', 'Yeah!! Daily word has been successfully submitted');

    		//return redirect()->back()->with('error', 'Oops!! This word already submitted');
    	
    }

   public function vieword()
    {
        $dailywords = DB::table('dailyword')->get();

        return view('admin.viewdailywords')->with('data',$dailywords);

    }

    public function destroy($id)
    {
        DB::table("dailyword")->delete($id);
        return redirect()->back()->with('info','Word deleted');
    }

    public function edit($id)
    {

        $dailywords= DB::table('dailyword')->where('id',$id)->get();
        return view('admin.editdailywords')->with('data',$dailywords);;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'description_english' => 'required',
            'description_hindi' => 'required',
            'example_english' => 'required',
            'example_hindi' => 'required',
            'date' => 'required',
        ]);
        DB::table('dailyword')->where('id',$id)->update($request->except(['_token']));
        return redirect()->back()->with('info','Word updated successfully');
    }
}
