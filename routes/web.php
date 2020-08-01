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
})->name('binar:welcome');
/*условие 1*/
Route::get('condition_1_view', 'CreateBinarController@showCondition1')->name('binar:show_comdition_1');
Route::post('create_binar', 'CreateBinarController@createBinar')->name('binar:create_binar');

/*условие 2*/
Route::get('condition_2_view', 'ManageBinarController@showCondition2')->name('binar:show_comdition_2');
Route::post('manage_binar', 'ManageBinarController@manageBinar')->name('binar:manage_binar');
