<?php


Route::get('/', function () {
    return view('login');
});


Route::get('/login', 'Adminauth\AuthController@showLoginForm');
Route::post('login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],function(){


	Route::get('/dashboard','Admin\AdminController@dashboard');

	Route::get('/logout','Adminauth\AuthController@logout');
});

/*Route::get('/create',function(){

	App\User::create([

		'name'=>'admin',
		'username'=>'Sparten1975',
		'email'=>'shivyas10@gmail.com',
		'password'=>bcrypt('admin@123#'),
	]);


});*/

/****************Words************/
Route::group(['middleware'=>['admin']],function(){

	Route::get('/addailyword','Admin\AddwordController@addailyword');
});

Route::post('/addword','Admin\AddwordController@addword');
Route::delete('/vieword/{id}', 'Admin\AddwordController@destroy');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/viewdailywords','Admin\AddwordController@vieword');
});

Route::group(['middleware'=>['admin']],function(){

Route::get('/editword/{id}','Admin\AddwordController@edit');

});
Route::post('/updateword/{id}','Admin\AddwordController@update');


/****************Phrase************/

Route::group(['middleware'=>['admin']],function(){

Route::get('/addphrases','Admin\AddphraseController@addphrase');

});
Route::post('/dailyphrase','Admin\AddphraseController@dailyphrase');

Route::group(['middleware'=>['admin']],function(){

Route::get('/viewphrase','Admin\AddphraseController@viewphrase');

});

Route::delete('/viewphrase/{id}', 'Admin\AddphraseController@destroy');

Route::group(['middleware'=>['admin']],function(){

Route::get('/editphrase/{id}','Admin\AddphraseController@editphrase');

});
Route::post('/updatephrase/{id}','Admin\AddphraseController@update');


/****************Tips************/



Route::get('/addailytips','Admin\AdminController@addailytips');
Route::post('/addailytip','Admin\AddtipsController@addtip');
Route::get('/edittips/{id}','Admin\AddtipsController@edit');
Route::get('/viewdailytips','Admin\AddtipsController@viewtip');
Route::delete('/viewtips/{id}', 'Admin\AddtipsController@destroy');
Route::post('/updatetip/{id}','Admin\AddtipsController@update');

/****************Testimonial************/

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addtestimonial','Admin\AddtestiController@addtestimonial');

});
Route::group(['middleware'=>['admin']],function(){

	Route::post('/addtesti','Admin\AddtestiController@addtesti');

});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/alltestimonials','Admin\AddtestiController@viewtestimonials');
});
Route::group(['middleware'=>['admin']],function(){

	Route::delete('/testimonial/{id}','Admin\AddtestiController@destroy');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/singletestimonial/{id}','Admin\AddtestiController@singletesti');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editestimonial/{id}','Admin\AddtestiController@edit');
});

Route::post('/updatetesti/{id}','Admin\AddtestiController@update');



/****************Learning************/


/*Route::group(['middleware'=>['admin']],function(){

	Route::get('/addcategory','Admin\LearningController@addcategory');
});

Route::post('/postcategory','Admin\LearningController@postcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/allcategories','Admin\LearningController@categories');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editcategory/{id}','Admin\LearningController@editcategory');
});

Route::post('/updatecategory/{id}','Admin\LearningController@updatecategory');

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/allcategories/{id}','Admin\LearningController@destroy');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addsubcategory','Admin\LearningController@addsubcategory');
});
Route::post('/postsubcategory','Admin\LearningController@postsubcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/allcategories','Admin\LearningController@categories');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editsubcategory/{id}','Admin\LearningController@editsubcategory');
});
Route::post('/updatesubcategory/{id}','Admin\LearningController@updatesubcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/allsubcategories/{id}','Admin\LearningController@destroysub');
}); */

Route::group(['middleware'=>['admin']],function(){

	Route::get('/learning/addmaterial','Admin\LearningController@addmaterial');
});

Route::post('/learning/postlearningmaterial','Admin\LearningController@postlearningmaterial');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/learning/viewlearningmaterial','Admin\LearningController@viewlearningmaterial');
});

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/learning/deletematerial/{id}','Admin\LearningController@destroylearningmaterial');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/learning/editmaterial/{id}','Admin\LearningController@editlearningmaterial');
});

Route::post('/learning/updatematerial/{id}','Admin\LearningController@updatelearningmaterial');


/****************Practice************/


Route::group(['middleware'=>['admin']],function(){

	Route::get('practice/addcategory','Admin\PracticeController@addcategory');

	Route::get('practice/allcategories','Admin\PracticeController@categories');

	Route::get('practice/editcategory/{id}','Admin\PracticeController@editcategory');

	Route::delete('practice/allcategories/{id}','Admin\PracticeController@destroy');

	Route::get('practice/addsubcategory','Admin\PracticeController@addsubcategory');

	Route::get('practice/allcategories','Admin\PracticeController@categories');

	Route::get('practice/editsubcategory/{id}','Admin\PracticeController@editsubcategory');

	Route::delete('practice/allsubcategories/{id}','Admin\PracticeController@destroysub');

	Route::get('practice/addmaterial','Admin\PracticeController@addmaterial');
});

/* Route::post('practice/postcategory','Admin\PracticeController@postcategory');

Route::post('practice/updatecategory/{id}','Admin\PracticeController@updatecategory');

Route::post('practice/postsubcategory','Admin\PracticeController@postsubcategory');

Route::post('practice/updatesubcategory/{id}','Admin\PracticeController@updatesubcategory'); */

Route::post('practice/postpracticequestion','Admin\PracticeController@postpracticequestion');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/practice/viewpracticequestions','Admin\PracticeController@viewpracticequestions');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/practice/editpracticequestion/{id}','Admin\PracticeController@editpracticequestion');
});

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/practice/deletepracticequestion/{id}','Admin\PracticeController@destroypracticequestion');
});

Route::post('/practice/updatepracticequestion/{id}','Admin\PracticeController@updatepracticequestion');


/****************Test Questions****************/

/* Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/addcategory','Admin\TestController@addcategory');
});
Route::post('test/postcategory','Admin\TestController@postcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/editcategory/{id}','Admin\TestController@editcategory');
});

Route::post('test/updatecategory/{id}','Admin\TestController@updatecategory');

Route::group(['middleware'=>['admin']],function(){

	Route::delete('test/categories/{id}','Admin\TestController@destroy');
});


Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/addsubcategory','Admin\TestController@addsubcategory');
});
Route::post('test/postsubcategory','Admin\TestController@postsubcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/editsubcategory/{id}','Admin\TestController@editsubcategory');
});

Route::post('test/updatesubcategory/{id}','Admin\TestController@updatesubcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::delete('test/subcategories/{id}','Admin\TestController@destroysub');
});


Route::get('/ajax-subcat',function(){

	$cat_id=Route::input('cat_id');

	$subcategories=DB::table('subcategories')->where('parentc','=',$cat_id)->get();

	return Response::json($subcategories);
}); */

Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/addquestion','Admin\TestController@addquestion');
});

Route::post('test/postquestion','Admin\TestController@postquestion');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/viewtestquestions','Admin\TestController@viewtestquestions');
});

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/test/deletetestquestion/{id}','Admin\TestController@destroytestquestion');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/test/edittestquestion/{id}','Admin\TestController@edittestquestion');
});

Route::post('/test/updatetestquestion/{id}','Admin\TestController@updatetestquestion');




/****************About Page****************/


Route::group(['middleware'=>['admin']],function(){

	Route::get('/aboutus','Admin\AboutController@showaboutpage');

});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addaboutcontent','Admin\AboutController@addcontent');

});
Route::post('/postaboutcontent','Admin\AboutController@postcontent');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editaboutcontent/{id}','Admin\AboutController@editcontent');

});
Route::post('/updateaboutcontent/{id}','Admin\AboutController@update');


/****************Privacy Page ************/

Route::group(['middleware'=>['admin']],function(){

	Route::get('/privacypolicy','Admin\AboutController@showprivacypage');

});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addprivacycontent','Admin\AboutController@addprivacycontent');

});
Route::post('/postprivacycontent','Admin\AboutController@postprivacycontent');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editprivacycontent/{id}','Admin\AboutController@editprivacycontent');

});
Route::post('/updateprivacycontent/{id}','Admin\AboutController@updateprivacycontent');


/****************Other Pages************/

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addpage','Admin\PageController@addpages');

});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/showpages','Admin\PageController@showpages');

});
Route::post('/postpagecontent','Admin\PageController@postpagecontent');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editpagecontent/{id}','Admin\PageController@editpagecontent');

});
Route::post('/updatepagecontent/{id}','Admin\PageController@updatepagecontent');

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/showpages/{id}','Admin\PageController@destroy');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/viewpage/{id}','Admin\PageController@viewpage');

});

/****************Site Manager****************/

Route::group(['middleware'=>['admin']],function(){

	Route::get('/logomanager','Admin\SiteController@logomanager');
	Route::get('/sitetitle','Admin\SiteController@sitetitle');
	
});

/*******************Category******************/

Route::group(['middleware'=>['admin']],function(){

	Route::get('/addcategory','Admin\CategoryController@addcategory');
});

Route::post('/postcategory','Admin\CategoryController@postcategory');

Route::group(['middleware'=>['admin']],function(){

	Route::get('/viewcategories','Admin\CategoryController@viewcategories');
});

Route::group(['middleware'=>['admin']],function(){

	Route::delete('/deletecategory/{id}','Admin\CategoryController@destroycategory');
});

Route::group(['middleware'=>['admin']],function(){

	Route::get('/editcategory/{id}','Admin\CategoryController@editcategory');
});

Route::post('/updatecategory/{id}','Admin\CategoryController@updatecategory');



