<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AddphraseController extends Controller
{
    public function addphrase()
    {

    	return view('admin.addphrase');

    }

     public function dailyphrase(Request $request)
    {
    	$title=$request->input('title');
    	$subtitle=$request->input('subtitle');
        $description=$request->input('description');
    	$written=$request->input('Written');
    	$spoken=$request->input('Spoken');
    	$formal=$request->input('Formal');
    	$informal=$request->input('Informal');
    	$metadata=$request->input('metadata');
    	$example_one=$request->input('example_one');
    	$example_two=$request->input('example_two');
        $date_input=$request->input('date');
    	$date=date("Y/m/d");

    	$data=array('title'=>$title,'subtitle'=>$subtitle,'written'=>$written,'spoken'=>$spoken,'formal'=>$formal,'informal'=>$informal,'metadata'=>$metadata,'first_example'=>$example_one,'second_example'=>$example_two,'date'=>$date_input,'created_at'=>$date);	
    	if(DB::table('dailyphrase')->insert($data)){

    	return redirect()->back()->with('success', 'Yeah!! Daily word has been successfully submitted');
    }else{

        return redirect()->back()->with('error', 'This phrase already submitted');
    }
    }

    public function viewphrase()
    {
    	$dailyphrase = DB::table('dailyphrase')->get();

        return view('admin.viewdailyphrase')->with('data',$dailyphrase);

    }

    public function destroy($id){
        DB::table("dailyphrase")->delete($id);
        return redirect()->back()->with('Info','Phrase deleted');
    }

    public function editphrase($id)
    {

        $dailyphrase    =   DB::table('dailyphrase')->where('id',$id)->get();

        return view('admin.editphrase')->with('data',$dailyphrase);

    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'written'=>'required',
            'spoken'=>'required',
            'formal'=>'required',
            'informal'=>'required',
            'metadata'=>'required',
            'first_example'=>'required',
            'second_example'=>'required',
            'date' => 'required'
        ]);
        DB::table('dailyphrase')->where('id',$id)->update($request->except(['_token']));
        return redirect()->back()->with('info','Phrase updated successfully');
    }


}
