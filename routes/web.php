<?php

use Illuminate\Support\Facades\Route;

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
#Client
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');
//Blogs
Route::get('/blogs/{blog_id}', 'BlogController@blog_detail');

#Server
Route::get('/admin', 'AdminController@login');
