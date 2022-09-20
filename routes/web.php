<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/',[LoginController::class,'getLogin']);
Route::post('/login',[LoginController::class,'postLogin']);

Route::group(['middleware' => ['authen']],function(){
    Route::get('/logout',[LoginController::class,'getLogout']);

    Route::get('/dashboard',[DashboardController::class,'dashboard']);
});

Route::group(['middleware' => ['authen','roles'],'roles'=>['Admin']],function(){
    Route::get('/createUser',[LoginController::class,'getLogout']);
    Route::get('/manage/course' ,[CourseController::class,'getManageCourse']);

});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
