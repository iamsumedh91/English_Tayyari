<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PracticeController extends Controller
{
    public function index()
    {
    	$data=DB::table('categories')->distinct()->where(['type' => 'practice'])->get(['category']);
    	return view('practice.index')->with('data',$data);
    }

    public function subcategory($category)
    {
    	$data=DB::table('practicequestions')->select('subcategory')->distinct()->where(['category' => $category])->get(['subcategory']);
    	return view('practice.subcategory')->with('data',$data)->with('category', $category);
    }

    public function practicequestions($category, $subcategory)
    {
    	$data=DB::table('practicequestions')->where(['category' => $category, 'subcategory' => $subcategory])->paginate(10);
    	return view('practice.practicequestions')->with('data',$data)->with('category', $category)->with('subcategory', $subcategory);
    }
}