<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    public function addcategory()
    {

    	return view('admin.practicecategory');

    }
 
    public function postcategory(Request $request)
    {
    	$this->validate($request, [
            'cname' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $cname		=$request->input('cname');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'practice');
        DB::table('categories')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Category successfully added');
    }

    public function categories()
    {   $categories=DB::table('categories')->get();
        $subcategories=DB::table('subcategories')->get();
    	return view('admin.practicecategories')->with('categories',$categories)
         ->with('subcategories',$subcategories);
    }

    public function editcategory()
    {
    	return view('admin.editpracticecat');
    }

    public function updatecategory(Request $request,$id)
    {
    	$this->validate($request, [
            'cname' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $subcname	=$request->input('cname');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keywords'=>$keywords,'description'=>$description,'type'=>'practice','status'=>'true');
        DB::table('categories')->where('id',$id)->update($data);
        return redirect()->back()->with('info', 'Yeah!! Category successfully updated');
    }

    public function destroy(Request $request,$id)
    {
    	DB::table('categories')->where('id',$id)->update('status','false');
        return redirect()->back()->with('info','Category Deleted');
    }

    


    /*****************Subcategory*****************/

    public function addsubcategory()
    {
        $categories=DB::table('categories')->get();
    	return view('admin.practicesubcat')->with('data',$categories);

    }

    public function postsubcategory(Request $request)
    {
    	$this->validate($request, [
            'cname'=>'required',
            'subcname' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);
        $pcat       =$request->input('cname');
        $subcname	=$request->input('subcname');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('subcname'=>$subcname,'parentc'=>$pcat,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'practice');
        DB::table('subcategories')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Sub-Category successfully added');
    }

    

    public function editsubcategory()
    {
    	return view('admin.editpracticesub');
    }

    public function updatesubcategory(Request $request,$id)
    {
    	$this->validate($request, [
            'subcname' 	=> 'required',
            'metatitle' => 'required',
            'keywords' 	=> 'required',
            'description' => 'required',
            
        ]);

        $subcname	=$request->input('subcname');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('subcname'=>$subcname,'metatitle'=>$metatitle,'keywords'=>$keywords,'description'=>$description,'type'=>'practice','status'=>'true');
        DB::table('subcategories')->where('id',$id)->update($data);
        return redirect()->back()->with('info', 'Yeah!! SubCategory successfully updated');
    }

    public function destroysub(Request $request,$id)
    {
    	DB::table('subcategories')->where('id',$id)->update('status','false');
        return redirect()->back()->with('info','Subcategory Deleted');
    }



        /*****************Material*****************/

        public function addmaterial()
        {
            $categories=DB::table('categories')->distinct()->where(['type' => 'practice'])->get(['category']);
            $subcategories=DB::table('categories')->distinct()->where(['type' => 'practice'])->get(['subcategory']);
            return view('admin.addpracticequestions')->with('categories', $categories)->with('subcategories', $subcategories);
        }

        public function postpracticequestion(Request $request)
    {
    	$this->validate($request, [
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_option' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'answer'     =>'required'
            
        ]);

        $question       =$request->input(htmlentities('question'));
        $optiona        =$request->input('option_a');
        $optionb        =$request->input('option_b');
        $optionc        =$request->input('option_c');
        $optiond        =$request->input('option_d');
        $correct_option =$request->input('correct_option');
        $answer         =$request->input('answer');
        $category       =$request->input('category');
        $subcategory    =$request->input('subcategory');
        $created_at     =date("Y-m-d H:i:s");
        $updated_at     =date("Y-m-d H:i:s");


        $data=array('question'=>$question,'optiona'=>$optiona,'optionb'=>$optionb,'optionc'=>$optionc,'optiond'=>$optiond, 'correct_option'=>$correct_option,'answer'=>$answer, 'category'=>$category, 'subcategory'=>$subcategory, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('practicequestions')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Practice Question successfully added');
    }

    public function editpracticequestion($id)
    {
        $categories=DB::table('categories')->distinct()->where(['type' => 'practice'])->get(['category']);
        $subcategories=DB::table('categories')->distinct()->where(['type' => 'practice'])->get(['subcategory']);
        $question = DB::table('practicequestions')->where('id',$id)->get();
    	return view('admin.editpracticequestion')->with('data', $question)->with('categories', $categories)->with('subcategories', $subcategories);
    }

   public function updatepracticequestion(Request $request,$id)
    {
          $this->validate($request, [
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_option' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'answer'     =>'required'
            
        ]);

        $question       =$request->input(htmlentities('question'));
        $optiona        =$request->input('option_a');
        $optionb        =$request->input('option_b');
        $optionc        =$request->input('option_c');
        $optiond        =$request->input('option_d');
        $correct_option =$request->input('correct_option');
        $answer         =$request->input('answer');
        $category       =$request->input('category');
        $subcategory    =$request->input('subcategory');
        $created_at     =date("Y-m-d H:i:s");
        $updated_at     =date("Y-m-d H:i:s");


        $data=array('question'=>$question,'optiona'=>$optiona,'optionb'=>$optionb,'optionc'=>$optionc,'optiond'=>$optiond, 'correct_option'=>$correct_option,'answer'=>$answer, 'category'=>$category, 'subcategory'=>$subcategory, 'created_at'=>$created_at, 'updated_at'=>$updated_at);

        DB::table('practicequestions')->where('id',$id)->update($data);

        return redirect()->back()->with('success','Yeah!! The Question successfully Updated.');
    }

    public function viewpracticequestions()
    {   $practicequestions=DB::table('practicequestions')->get();
    	return view('admin.allpracticequestions')->with('practicequestions',$practicequestions);
    }

    public function destroypracticequestion($id)
    {
        DB::table("practicequestions")->delete($id);
        return redirect()->back()->with('info','Question Deleted');
    }

}
