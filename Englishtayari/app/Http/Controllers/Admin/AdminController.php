<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
//use App\Dailyword;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function _construct()
    {

    	$this->middleware('admin');


    }

    public function dashboard()
    {
        $dailytips = DB::table('dailytips')->count();
        $lasttip = DB::table('dailytips')->orderBy('id', 'desc')->first();
        $dailyphrases = DB::table('dailyphrase')->count();
        $lastphrase = DB::table('dailyphrase')->orderBy('id', 'desc')->first();
        $dailywords = DB::table('dailyword')->count();
        $lastword = DB::table('dailyword')->orderBy('id', 'desc')->first();

    	return view('admin.index')->with('dailytips',$dailytips)->with('dailyphrases',$dailyphrases)->with('dailywords',$dailywords )->with('lasttip',$lasttip)->with('lastphrase',$lastphrase)->with('lastword',$lastword);
    }

    public function addailytips()
    {

    	return view('admin.addailytips');

    }

     public function editdailytips()
    {

    	return view('admin.editdailytips');

    }

    public function viewdailytips()
    {

    	return view('admin.viewdailytips');

    }
    
    public function addtestimonial()
    {

    	return view('admin.addtestimonial');

    }
    
    public function editestimonial()
    {

    	return view('admin.editestimonial');

    }
    
     public function viewtestimonial()
    {

    	return view('admin.viewtestimonial');

    }

    public function addailyword()
    {
        return view('admin.addailyword');
    }
    
}
