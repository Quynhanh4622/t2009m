<?php

use App\Http\Controllers\LibraryController;
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
//Route::get('/library/create',[LibraryController::class, 'create']);
//Route::post('/library/create',[LibraryController::class, 'store']);
Route::post('/search',[LibraryController::class,'search']);
Route::get('/library/list',[LibraryController::class, 'list']);
Route::get('/library/edit/{id}',[LibraryController::class, 'edit']);
Route::post('/library/update/{id}',[LibraryController::class, 'update']);
Route::get('/library/delete/{id}',[LibraryController::class, 'delete']);
