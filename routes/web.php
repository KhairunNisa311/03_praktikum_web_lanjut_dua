<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [CompanyController:: class, 'index']);

Route::get('/company', [CompanyController:: class, 'company']);

Route::get('/services', [PostController:: class, 'index']);

Route::get('/contact', [CompanyController:: class, 'contact']);

