<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ConversationController;

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

//  Route::get('/', function () {
//      return view('login');
//  });
Route::get('/',[UserController::class, 'login']);
Route::post('userLogin',[UserController::class, 'userLogin']);
Route::get('register',[UserController::class, 'register']);
Route::post('userRegister',[UserController::class, 'UserRegister']);
Route::get('logout',[UserController::class, 'logout']);
Route::get('home',[GroupController::class, 'index']);
Route::get('createGroup',[GroupController::class, 'createGroup']);
Route::post('storeGroup',[GroupController::class, 'store']);
Route::get('addMembers',[GroupController::class, 'addMembers']);
Route::get('viewMembers',[GroupController::class, 'groupMembers']);
Route::get('deleteAll',[GroupController::class, 'deleteAll']);
Route::get('viewChat',[ConversationController::class, 'viewChat']);

