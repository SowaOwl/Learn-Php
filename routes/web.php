<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserInfoController;

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

Route::get('lesson/3', [FirstController::class, 'lesson']);

Route::get('/calc', [MainController::class, 'calc']);
Route::post('/calc/result', [MainController::class, 'calc_result']);

Route::get('user/create', [MainController::class, 'create_new_user']);
Route::get('user/get/all', [MainController::class, 'get_all_users']);
Route::get('user/get/by_id/{id}', [MainController::class, 'get_user_by_id']);

Route::get('user_info/create', [UserInfoController::class, 'create_new_user_info']);
Route::get('user_info/update/by_id/{id}', [UserInfoController::class, 'update_user_info_by_id']);
Route::get('user_info/delete/by_id/{id}', [UserInfoController::class, 'delete_user_info_by_id']);
Route::get('user_info/get/all', [UserInfoController::class, 'get_all_user_info']);
Route::get('user_info/get/by_id/{id}', [UserInfoController::class, 'get_user_info_by_id']);
