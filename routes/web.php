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

Route::get('/company', 'CompanyController@index');
Route::get('/company/{companyId}', 'CompanyController@show');
Route::post('/company/create', 'CompanyController@create');
Route::put('/company/update/{companyId}', 'CompanyController@store');
Route::delete('/company/delete/{companyId}', 'CompanyController@destroy');
