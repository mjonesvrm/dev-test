<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/company', 'CompanyController@index');
Route::get('/company/{companyId}', 'CompanyController@show');
Route::post('/company/create', 'CompanyController@create');
Route::put('/company/update/{companyId}', 'CompanyController@store');
Route::delete('/company/delete/{companyId}', 'CompanyController@destroy');

