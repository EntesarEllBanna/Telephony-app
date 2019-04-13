<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return redirect('/index');
});

Route::get('/logout', function () {
    return redirect('/index');
});


Route::get('/home', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/index', function () {
    return view('Telephony.index');
});

Route::get('/news', function () {
    return view('Telephony.news');
});



Route::get("/storage/{id}/delete","Tel\AllNamesController@destroy");

Route::get("/storage/index","Tel\AllNamesController@searchpagingadv");



Route::resource("/storage","Tel\AllNamesController");

Route::get("/changepassword","Tel\HomeController@changepassword");
Route::post("/changepassword","Tel\HomeController@postChangepassword");

Auth::routes();


Route::get("/updateprofile","Tel\HomeController@profile");
Route::post("/updateprofile","Tel\HomeController@updateprofile");


Route::post("/signupadmin","HomeController@signupadmin");

//Route::get("/register","HomeController@register");
Route::get("/allredirect","HomeController@allredirect");






