<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

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

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects_desactived', [ProjectController::class, 'firstTwoDesactived']);
Route::get('projects_lastest', [ProjectController::class, 'lastestTenProjects']);
Route::get('projects_insert', [ProjectController::class, 'insertProject']);
Route::get('projects_change', [ProjectController::class, 'changedNameProyects']);

Route::get('user_delete', [UserController::class, 'deleteUser']);
Route::get('user_views', [UserController::class, 'viewUser']);
Route::get('user_views_delete', [UserController::class, 'viewUserDelete']);
Route::get('user_restore', [UserController::class, 'userRestore']);
// Route::get('projects', 'ProjectController@index');
