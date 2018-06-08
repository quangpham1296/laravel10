<?php

Route::get('',function(){
	return view('master');
});

Route::get('about',function(){
	return view('about');
});

Route::get('about-us',function(){
	return view('about-us');
});

// Route::get('about',function($a){
// 	echo $a;
// 	return view('about');
// });

