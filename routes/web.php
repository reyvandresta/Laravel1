<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\homeController;

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

//Route::get('/index', function () {
  //  return view('index');
//});

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('login/', function () {
 //   return view('login');
//});

//Route::get('tentang/', function () {
//    return view('about');
//});


Route::get('/login', [homeController::class, 'login'])->name('login');

Route::get('/about', [homeController::class, 'about'])->name('about');

Route::get('/index', [homeController::class, 'index'])->name('index');

