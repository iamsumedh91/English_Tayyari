<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
   public function addcategory()
   {	
   		$categories=DB::table('categories')->where('type','test')->get();
   		return view('admin.addtestcategory')->with('data',$categories);

   }

   public function postcategory(Request $request)
   {
   		$this->validate($request, [
            'cname'=>'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $cname=$request->input('cname');
        $metatitle=$request->input('metatitle');
        $keywords=$request->input('keywords');
        $description=$request->input('description');

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'test');

        DB::table('categories')->insert($data);

        return redirect()->back()->with('success', 'Yeah!! Category successfully added');
   }


   public function editcategory(Request $request,$id)
   {
   		$data=DB::table('categories')->where('id',$id)->get();
   		return view('admin.editestcategory')->with('data',$data);
   }

   public function updatecategory(Request $request,$id)
   {
   		$this->validate($request, [
            'cname'=>'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $cname=$request->input('cname');
        $metatitle=$request->input('metatitle');
        $keywords=$request->input('keywords');
        $description=$request->input('description');

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'test');

        DB::table('categories')->where('id',$id)->update($data);

        $categories=DB::table('categories')->where('type','test')->get();

        return view('admin.addtestcategory')->with('info', 'Yeah!! Category successfully updated')
       ->with('data',$categories) ;
   }

   public function destroy(Request $request,$id)
   {

   		DB::table('categories')->delete($id);
        return redirect()->back()->with('info','Category Deleted');
   }



  /*********** Subcategories **********/

  public function addsubcategory()
  {	
  	$categories=DB::table('categories')->where('type','test')->get();
  	$subcategories=DB::table('subcategories')->where('type','test')->get();
  	return view('admin.addtestsubcategory')->with('data',$categories)->with('subcategories',$subcategories);
  }


  public function postsubcategory(Request $request)
   {
   		$this->validate($request, [
   			'cname'=>'required',
            'parentc'=>'required',
            
        ]);
   		$cname=$request->input('cname');
        $pname=$request->input('parentc');
        $metatitle=$request->input('metatitle');
        $keywords=$request->input('keywords');
        $description=$request->input('description');

        $data=array('subcname'=>$cname,'parentc'=>$pname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'test');

        DB::table('subcategories')->insert($data);

        return redirect()->back()->with('success', 'Yeah!! Subcategory successfully added');
   }

    public function editsubcategory(Request $request,$id)
   {
   		$data=DB::table('subcategories')->where('id',$id)->get();
   		$categories=DB::table('categories')->where('type','test')->get();
   		return view('admin.editestsubcategory')->with('data',$data)->with('categories',$categories);
   }

    public function updatesubcategory(Request $request,$id)
   {
   		$this->validate($request, [
           'cname'=>'required',
            'parentc'=>'required',
            
        ]);

        $cname=$request->input('cname');
        $pname=$request->input('parentc');
        $metatitle=$request->input('metatitle');
        $keywords=$request->input('keywords');
        $description=$request->input('description');

        $data=array('subcname'=>$cname,'parentc'=>$pname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'test');

        DB::table('subcategories')->where('id',$id)->update($data);

        $subcategories=DB::table('subcategories')->where('type','test')->get();

        return redirect()->back()->with('info', 'Yeah!! subcategory successfully updated')
       ->with('data',$subcategories) ;
   }


   public function destroysub(Request $request,$id)
   {

   	DB::table('subcategories')->delete($id);
        return redirect()->back()->with('info','Subcategory Deleted');
   }




   /*********** Questions **********/

   public function addquestion()
   {

   	$categories=DB::table('categories')->distinct()->where(['type' => 'test'])->get(['category']);
        $subcategories=DB::table('categories')->distinct()->where(['type' => 'test'])->get(['subcategory']);
   	return view('admin.testquestion')->with('data',$categories)->with('categories', $categories)->with('subcategories', $subcategories);
   }

   public function viewtestquestions()
    {   $questions=DB::table('testquestions')->get();
    	return view('admin.alltestquestions')->with('questions',$questions);
    }


   public function postquestion(Request $request)
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

        DB::table('testquestions')->insert($data);

        return redirect()->back()->with('success','Question successfully added');

   }

   public function edittestquestion($id)
    {
        $categories=DB::table('categories')->distinct()->where(['type' => 'test'])->get(['category']);
        $subcategories=DB::table('categories')->distinct()->where(['type' => 'test'])->get(['subcategory']);
        $question = DB::table('testquestions')->where('id',$id)->get();
    	return view('admin.edittestquestion')->with('data', $question)->with('categories', $categories)->with('subcategories', $subcategories);
    }

   public function updatetestquestion(Request $request,$id)
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

        DB::table('testquestions')->where('id',$id)->update($data);

        return redirect()->back()->with('info','Yeah!! The Question successfully Updated.');
    }

    public function destroytestquestion($id)
    {
        DB::table("testquestions")->delete($id);
        return redirect()->back()->with('info','Question Deleted');
    }
}
