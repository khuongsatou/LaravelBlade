<?php

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
    return view('layout');
})->name('dashboard');

// Route::get('/linh_vuc', function () {
//     return view('ds_linh_vuc');
// })->name('linhvuc.danhsach');

// Route::get('/linh_vuc/them_linh_vuc', function () {
//     return view('them_linh_vuc');
// })->name('linhvuc.themmoi');



//gôm group route

//gôm theo lĩnh vực
Route::prefix('linh_vuc')->group(function(){
    //gôm theo name
    Route::name('linhvuc.')->group(function(){
        Route::get('/', function () {
            return view('ds_linh_vuc');
        })->name('danhsach');

        Route::get('/them_linh_vuc', function () {
            return view('them_linh_vuc');
        })->name('themmoi');
    });
});