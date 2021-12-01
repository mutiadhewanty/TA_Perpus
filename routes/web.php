<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'auth'], function (){
//     Route::group(['middleware' => 'role:admin'], function (){
//         Route::get('/admin', function() {
//             return 'Haloo Admin';
//         });
//     });

//     Route::group(['middleware' => 'role:user'], function (){
//         Route::get('/home', function() {
//             return 'user';
//         });
//     });
// });

Route::group(['middleware' => 'auth', 'role:admin'], function (){   
        Route::get('/admin', function() {
            return view('admin');
        });
    });

    Route::group(['middleware' => 'auth', 'role:user'], function (){
        Route::get('/home', function() {
            return view('home');
        });
    });


