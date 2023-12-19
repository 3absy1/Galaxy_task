<?php

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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


//***************************************   Sign in    ************************************************************

Route::post('Login',[SignInController::class,'store']);
Route::get('Login',[SignInController::class,'show']);


//***************************************   Sign Up    ************************************************************

Route::post('SignUp',[SignUpController::class,'create']);
Route::get('SignUp',[SignUpController::class,'show']);


//*********************** questions ***************************************************

Route::get('questions', [QuestionsController::class,'show']);
Route::post('create',[QuestionsController::class,'create'])->name('question.create');
Route::get('logout', [QuestionsController::class, 'logout']);

//************************* preview ******************************
Route::get('preview',[QuestionsController::class,'preview']);

