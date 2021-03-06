<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Models\Like;
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


Route::get('/',[AuthController::class, 'check'])->name('authcheck');

Route::group(['middleware'=>'guest'],function(){
    // Route::get('/',[AuthController::class,'login'])->name('login')->middleware('isLoggedIn');
    Route::post('register-user',[AuthController::class,'registerUser'])->name('register-user');
    Route::post('login-user',[AuthController::class,'loginUser'])->name('login-user');
});

Route::group(['middleware'=>'auth'], function(){
    //Homepage
    // Route::get('/', [AuthController::class,'homepage'])->name('homepage');
    
    //Posting feed
    Route::post('/post-feed',[PostController::class,'createPost'])->name('postfeed');

    // Profile
    Route::get('/profile', [AuthController::class,'profile'])->name('profile'); 

    //Uploading profile picture
    Route::post('/upload-profile-pic',[ProfileController::class,'update'])->name('pPUpload');

    //Uploading cover picture
    Route::post('/upload-cover-pic',[ProfileController::class,'updateCover'])->name('cPUpload');

    // Story
    Route::get('/story',[PostController::class,'storyFeed'])->name('storyPage');

    //Upload story
    Route::post('/upload-story',[PostController::class,'createStory'])->name('storyUpload');

    //Log out user
    Route::get('logout',[AuthController::class,'logout']);

    // like post
    Route::post('/like-post',[LikeController::class,'likePost'])->name('likepost');
});
