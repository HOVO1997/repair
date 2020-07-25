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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/plans',function (){
    return view('plans');
})->name('plans');


Route::put('stripe-payment', 'PaymentController@store')->name('stripe.store');

Route::post('buy-plan', 'PaymentController@plan')->name('stripe.plan');
