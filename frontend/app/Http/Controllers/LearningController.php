<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class LearningController extends Controller
{
    public function index()
    {
        $data=DB::table('categories')->distinct()->where(['type' => 'learning'])->get(['category']);
    	return view('learning.index')->with('data',$data);
    }

    public function lessonnumbers($category)
    {
    	$data=DB::table('learning')->distinct()->where(['category' => $category])->get();
    	return view('learning.subcategory')->with('data',$data)->with('category', $category);
    }

    public function lesson($category, $lesson_number)
    {
    	$data=DB::table('learning')->where(['category' => $category, 'lesson_number' => $lesson_number])->get();

    	return view('learning.lesson')->with('data',$data);
    }

}