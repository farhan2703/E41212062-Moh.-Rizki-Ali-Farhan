<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homeProfileController;

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

Route::get('/', [homeProfileController::class,'index']);


Route::group(['middleware' => ['auth']], function () {

    Route::get('/adminHome', [adminController::class, 'index'])->middleware('user-access:admin')->name('adminPage');
    // ini untuk tambah data
    Route::get('/homeAdmin/create', [adminController::class, 'create'])->middleware('user-access:admin');
    Route::post('/homeAdmin', [adminController::class, 'store'])->middleware('user-access:admin');


    // ini untuk edit
    Route::get('/homeAdmin/{id}/edit', [adminController::class, 'edit'])->middleware('user-access:admin');
    Route::put('/homeAdmin/{id}', [adminController::class, 'update'])->middleware('user-access:admin');

    // ini untuk hapus data
    Route::delete('/homeAdmin/{id}', [adminController::class, 'destroy'])->middleware('user-access:admin');

    Route::get('/about', [aboutController::class,'index'])->name('userPage')->middleware('user-access:user');
    Route::get('/blog', [blogController::class,'index']);

});


// Route::group(['middleware' => ['auth']], function () {

// Route::get('/adminHome', [adminController::class,'index'])->middleware('UserAccess:admin')->name('adminPage');
// Route::get('/tambahProfile', [adminController::class,'create'])->middleware('UserAccess:admin');
// Route::get('/users/{id}/edit', [adminController::class,'edit'])->middleware('UserAccess:admin');
// Route::delete('/users/{id}/delet', [adminController::class,'store'])->middleware('UserAccess:admin');

// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

