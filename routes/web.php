<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate ; 

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

// //login
// Route::get('/', function () {
//     return view('welcome');
// });

// //login
// Route::get('/login','LoginController@index');


/*
    admin backend
*/  

Route::prefix('admin')->group(function(){
    Route::middleware('auth:admin')->group(function(){
         //Dashboard
            
    Route::get('/','DashboardController@index');

    //Product
    Route::resource('/products','ProductController');

    //Order
    Route::resource('/orders', 'OrderController');
    Route::get('/confirm/{id}','OrderController@confirm')->name('orders.confirm');
    Route::get('/pending/{id}','OrderController@pending')->name('orders.pending');
    Route::get('/show/{id}','OrderController@show')->name('orders.show');

    //Users
    Route::resource('/users','UserController');


    //logout
    Route::get('/logout','AdminUserController@logout');
    });


    

    // Admin login
    Route::get('/login','AdminUserController@index');
    Route::post('/login','AdminUserController@store');
});


// Auth::routes();

// Route::get('/home', 'DashboardController@index')->name('admin.dashboard');
