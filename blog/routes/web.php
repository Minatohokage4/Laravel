<?php
Routes
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! | */
Route::get('/',function() {
  return View::make('index');
});

Route::get('login',function(){
  return View::make('login');
});
Route::group(array('before'=>'auth'),function(){
    Route::get('/',function(){
      return View::make('index');
    });
    Route::get('user/profile',function(){
      return 'User profile page';
    });

});
