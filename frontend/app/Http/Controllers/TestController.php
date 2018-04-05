<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
    	$data=DB::table('categories')->distinct()->where(['type' => 'test'])->get(['category']);
    	return view('tests.index')->with('data',$data);
    }    

    public function subcategory($category)
    {
    	$data=DB::table('testquestions')->select('subcategory')->distinct()->where(['category' => $category])->get(['subcategory']);
    	return view('tests.subcategory')->with('data',$data)->with('category', $category);
    }

    public function testquestions($category, $subcategory)
    {
    	$data=DB::table('testquestions')->where(['category' => $category, 'subcategory' => $subcategory])->paginate(10);

    	return view('tests.testquestions')->with('data',$data)->with('category', $category)->with('subcategory', $subcategory);
    }

}