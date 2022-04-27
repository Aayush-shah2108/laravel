<?php

use App\Http\Controllers\CrudController;
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
Route::get('read', [CrudController::class, 'show']);
Route::get('read/{id}',[CrudController::class,'get']);
Route::post('submit',[CrudController::class,'add']);
Route::put('change/{id}',[CrudController::class,'chang']);
Route::delete('remove/{id}',[CrudController::class,'destroy']);


