<?php

use App\buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;

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

Route::get('/buku', 'bukuController@index');
Route::get('/export','bukuController@export');