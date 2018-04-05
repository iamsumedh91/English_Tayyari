<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
    	$data['tips']=DB::table('dailytips')->where(['date' => date('Y-m-d')])->get();
        $data['phrases']=DB::table('dailyphrase')->where(['date' => date('Y-m-d')])->get();
        $data['words']=DB::table('dailyword')->where(['date' => date('Y-m-d')])->get();

    	return view('home.index')->with('data',$data);
    }

    public function dailytips($day = "today")
    {
        if($day == "today"){
             $data['previous']= date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));
             $data['next'] = date('Y-m-d', strtotime(date('Y-m-d').' +1 day'));
    	     $data['record']=DB::table('dailytips')->where(['date' => date('Y-m-d')])->get();
        }
        else{
             $data['previous'] = date('Y-m-d', strtotime($day.' -1 day'));
             $data['next'] = date('Y-m-d', strtotime($day.' +1 day'));
    	     $data['record']=DB::table('dailytips')->where(['date' => $day])->get();
        }
    	return view('dailytips.index')->with('data',$data);
    }

    public function dailyphrases($day = "today")
    {
        if($day == "today"){
             $data['previous']= date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));
             $data['next'] = date('Y-m-d', strtotime(date('Y-m-d').' +1 day'));
    	     $data['record']=DB::table('dailyphrase')->where(['date' => date('Y-m-d')])->get();
        }
        else{
             $data['previous'] = date('Y-m-d', strtotime($day.' -1 day'));
             $data['next'] = date('Y-m-d', strtotime($day.' +1 day'));
    	     $data['record']=DB::table('dailyphrase')->where(['date' => $day])->get();
        }
    	return view('dailyphrases.index')->with('data',$data);
    }

    public function dailywords($day = "today")
    {
        if($day == "today"){
             $data['previous']= date('Y-m-d', strtotime(date('Y-m-d').' -1 day'));
             $data['next'] = date('Y-m-d', strtotime(date('Y-m-d').' +1 day'));
    	     $data['record']=DB::table('dailyword')->where(['date' => date('Y-m-d')])->get();
        }
        else{
             $data['previous'] = date('Y-m-d', strtotime($day.' -1 day'));
             $data['next'] = date('Y-m-d', strtotime($day.' +1 day'));
    	     $data['record']=DB::table('dailyword')->where(['date' => $day])->get();
        }
    	return view('dailywords.index')->with('data',$data);
    }
}
