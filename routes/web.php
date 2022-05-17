<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------p
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthController::class,'login'])->name('login')->middleware('isLoggedIn');
    Route::post('register-user',[AuthController::class,'registerUser'])->name('register-user');
    Route::post('login-user',[AuthController::class,'loginUser'])->name('login-user');
});

Route::group(['middleware'=>'auth'], function(){
    //Homepage
    Route::get('/homepage', [AuthController::class,'homepage'])->name('homepage');
    
    //Posting feed
    Route::post('/post-feed',[PostController::class,'createPost'])->name('postfeed');

    // Profile
    Route::get('/profile', [AuthController::class,'profile'])->name('profile'); 

    //Uploading profile picture
    Route::post('/upload-profile-pic',[ProfileController::class,'update'])->name('pPUpload');

    //Uploading cover picture
    Route::post('/upload-cover-pic',[ProfileController::class,'updateCover'])->name('cPUpload');

    // Story
    Route::get('/story',[PostController::class,'storyFeed']);
    Route::get('logout',[AuthController::class,'logout']);
});
