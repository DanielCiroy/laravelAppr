<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});

Route::get('/salut/{name}/{age}',function($nom,$age){
   echo 'salut tout le monde je suis '.$nom.'et j\'ai '.$age.'ans';
});

Route::get('/about',function(){
    return view('apropos');
});
