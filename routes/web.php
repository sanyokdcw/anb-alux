<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Maincontroller; 

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

Route::get('/', 'Maincontroller@index');

Route::get('/setlocale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

