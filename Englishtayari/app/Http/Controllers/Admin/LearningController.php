<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LearningController extends Controller
{

	/*****************Category************/

    public function addcategory()
    {

    	return view('admin.addlearningcategory');

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

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'learning');
        DB::table('categories')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Category successfully added');
    }

    public function categories()
    {   $categories=DB::table('categories')->get();
    	return view('admin.allcategories')->with('categories',$categories);
    }

    public function editcategory()
    {
    	return view('admin.editlearningcat');
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

        $data=array('cname'=>$cname,'metatitle'=>$metatitle,'keywords'=>$keywords,'description'=>$description,'type'=>'learning','status'=>'true');
        DB::table('categories')->where('id',$id)->update($data);
        return redirect()->back()->with('info', 'Yeah!! Category successfully updated');
    }

    public function destroy(Request $request,$id)
    {
    	DB::table('categories')->where('id',$id)->update('status','false');
        return redirect()->back()->with('info','Category Deleted');
    }

    


    /*****************Subcategory**********/

    public function addsubcategory()
    {
        $categories=DB::table('categories')->get();
    	return view('admin.learningsubcat')->with('data',$categories);

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

        $data=array('subcname'=>$subcname,'parentc'=>$pcat,'metatitle'=>$metatitle,'keyword'=>$keywords,'description'=>$description,'type'=>'learning');
        DB::table('subcategories')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Sub-Category successfully added');
    }

    

    public function editsubcategory()
    {
    	return view('admin.editlearningsub');
    }

    public function updatesubcategory(Request $request,$id)
    {
    	$this->validate($request, [
            'subcname' => 'required',
            'metatitle' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            
        ]);

        $subcname	=$request->input('subcname');
        $metatitle	=$request->input('metatitle');
        $keywords	=$request->input('keywords');
        $description=$request->input('description');

        $data=array('subcname'=>$subcname,'metatitle'=>$metatitle,'keywords'=>$keywords,'description'=>$description,'type'=>'learning','status'=>'true');
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
            $categories=DB::table('categories')->distinct()->where(['type' => 'learning'])->get(['category']);
            return view('admin.addlearningmaterial')->with('categories', $categories);
        }

        public function postlearningmaterial(Request $request)
    {
    	$this->validate($request, [
            'category' => 'required',
            'lesson_number' => 'required',
            'title' => 'required',
            'topic' => 'required',
            'description' => 'required',
            'example_1' => 'required',
            'example_2' => 'required',
            'use_in_sentence' => 'required'
            
        ]);

        $category       =$request->input('category');
        $lesson_number	=$request->input('lesson_number');
        $title          =$request->input('title');
        $topic          =$request->input('topic');
        $description    =$request->input('description');
        $example_1      =$request->input('example_1');
        $example_2      =$request->input('example_2');
        $use_in_sentence=$request->input('use_in_sentence');
        $created_at     =date("Y-m-d H:i:s");
        $updated_at     =date("Y-m-d H:i:s");

        $data=array('category'=>$category,'lesson_number'=>$lesson_number,'title'=>$title,'topic'=>$topic,'description'=>$description,'example_1'=>$example_1,'example_2'=>$example_2,'use_in_sentence'=>$use_in_sentence,'created_at'=>$created_at,'updated_at'=>$updated_at);
        DB::table('learning')->insert($data);
        return redirect()->back()->with('success', 'Yeah!! Category successfully added');
    }

    public function viewlearningmaterial()
    {   $material=DB::table('learning')->get();
    	return view('admin.alllearningmaterial')->with('material',$material);
    }

    public function editlearningmaterial($id)
    {
        $categories=DB::table('categories')->distinct()->where(['type' => 'learning'])->get(['category']);
        $learningmaterial= DB::table('learning')->where('id',$id)->get();
    	return view('admin.editlearningmaterial')->with('data', $learningmaterial)->with('categories', $categories);
    }

    public function updatelearningmaterial(Request $request,$id)
    {
    	$this->validate($request, [
            'category' => 'required',
            'lesson_number' => 'required',
            'title' => 'required',
            'topic' => 'required',
            'description' => 'required',
            'example_1' => 'required',
            'example_2' => 'required',
            'use_in_sentence' => 'required'
            
        ]);

        $category       =$request->input('category');
        $lesson_number	=$request->input('lesson_number');
        $title         	=$request->input('title');
        $topic         	=$request->input('topic');
        $description    =$request->input('description');
        $example_1      =$request->input('example_1');
        $example_2      =$request->input('example_2');
        $use_in_sentence=$request->input('use_in_sentence');

    
$data=array('category'=>$category,'lesson_number'=>$lesson_number,'title'=>$title,'topic'=>$topic,'description'=>$description,'example_1'=>$example_1,'example_2'=>$example_2,'use_in_sentence'=>$use_in_sentence,'updated_at'=>date("Y-m-d H:i:s"));
        DB::table('learning')->where('id',$id)->update($data);
        return redirect()->back()->with('info', 'Yeah!! The Learning Material successfully updated');
    }

    public function destroylearningmaterial($id)
    {
        DB::table("learning")->delete($id);
        return redirect()->back()->with('info','Material Deleted');
    }

}


