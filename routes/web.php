<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\NewsindController;
use App\Http\Controllers\LandingController;


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


Route::get('/',[NewsindController::class, 'data']);
Route::get('home', function () {
    return view('home');
})->name('home');

//Category
Route::get('Catagory',[CatagoryController::class, 'data']);
Route::get('Catagory/add',[CatagoryController::class, 'add']);
Route::post('Catagory',[CatagoryController::class, 'addProcess']);
Route::get('Catagory/edit/{id}',[CatagoryController::class, 'edit']);
Route::patch('Catagory/{id}',[CatagoryController::class, 'editProcess']);
Route::delete('Catagory/{id}',[CatagoryController::class, 'delete']);

//newsind
Route::get('newsind',[NewsindController::class, 'data'])->name('getdata');
// Route::get('newsind', 'NewsindController@data')->name('getdata');
Route::get('newsind/add',[NewsindController::class, 'add']);
Route::post('newsind',[NewsindController::class, 'addProcess']);
Route::get('newsind/edit/{id}',[NewsindController::class, 'edit']);
Route::patch('newsind/{id}',[NewsindController::class, 'editProcess']);
Route::delete('newsind/{id}',[NewsindController::class, 'delete']);
Route::get('newsind/detail/{id}',[NewsindController::class, 'detail']);
Route::get('SearchByTitleOrContent',[NewsindController::class, 'data'])->name('search');
Route::get('FilterTanggalBerita',[NewsindController::class, 'data'])->name('filterdate');
Route::get('newsind.export',[NewsindController::class, 'get_newsind_data'])->name('newsind.export');

//landingPage
Route::get('landing',[LandingController::class, 'index']);
Route::get('landing/detail/{id}',[LandingController::class, 'detail']);
Route::get('SemuaBerita',[LandingController::class, 'newsall']);
Route::get('getIdCat/{id}',[LandingController::class, 'getIdCat']);


Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('registration');
});

Route::get('forget-password', function () {
    return view('forget-password');
});

Route::get('reset-password', function () {
    return view('reset-password');
});

