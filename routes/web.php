<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::redirect('/quote','/indepth.quote.blade.php',301);
Route::get('/offer', 'OfferController@show');
Route::get('/about', 'AboutController@show');
Route::get('/product', 'ProductController@show');



Route::get('/quote',function()
{
	return view ('quote');
});

Route::get('/about',function()
{
	return view ('about');
});
Route::get('/product',function()
{
	return view ('product');
});
Route::get('/index',function()
{
	return view ('index');
});
Route::get('/deals',function()
{
	return view ('deals');
});

Route::get('/book',function()
{
	return view ('book');
});
Route::get('auth/login',function()
{
	return view ('login');
});
Route::get('auth/register',function()
{
	return view ('register');
});
Route::get('/listing',function()
{
	return view ('listing');
});
	