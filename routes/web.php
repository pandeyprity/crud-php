<?php

use App\Http\Controllers\crudController;
use App\Http\Controllers\UserController;
use App\Models\Crud;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
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
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/user/show', function () {
    return view('user.show');
});

Route::get('/user/create', function () {
    return view('user.create');
});


//Route::get('/crud', [crudController::class, 'index'])->name('views.index');
Route::resource('Abcd', CrudController::class);
Route::get('crud/show', [CrudController::class,"show"]);
Route::get('crud/create', [CrudController::class,"create"]);
Route::post('crud/store', [CrudController::class,"store"]);
Route::get('crud/edit/{id}', [CrudController::class, 'edit']);
Route::post('crud/update/{id}', [CrudController::class, 'update']);
Route::get('crud/destroy/{id}', [CrudController::class, 'destroy']);

Route::post('user/signup', [UserController::class,"signup"]);
Route::post('user/login', [UserController::class,"login"]);

Route::get('user/show', [UserController::class,"show"]);
Route::get('user/create', [UserController::class,"create"]);
Route::post('user/store', [UserController::class,"store"]);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/update/{id}', [UserController::class, 'update']);
Route::get('user/delete/{id}', [UserController::class, 'delete']);





  


