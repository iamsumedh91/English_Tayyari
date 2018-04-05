<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewdailywordsController extends Controller
{
    public function showdailywords()
    {

    	 $dailywords = DB::table('dailyword')->get();

        return view('admin.viewdailywords')->with('data',$dailywords);

    }
}
