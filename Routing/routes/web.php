<?php

use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

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
    return view('welcome');
});

Route::get('/page1/page2',function(){
    return 'welcome Page1';
});

Route::get('/page1/{param1}',function($param1){
    return 'welcome page with paramettre '.$param1.'in route';
});
