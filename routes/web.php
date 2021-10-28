<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\UserStatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserTypeList;

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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard/users/employees',[UserTypeList::class, 'employees'])->name('employees');
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::resource('/dashboard/books',BookController::class);
    Route::resource('/dashboard/categories',CategoryController::class)->except('show');
    Route::resource('/dashboard/userstatuses',UserStatusController::class)->except('show');
    Route::resource('/dashboard/departements',DepartementController::class)->except('show');
    Route::resource('/dashboard/users',UserController::class)->except('create');
});
    



require __DIR__.'/auth.php';
