<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{user}/posts', [UserController::class, 'userPosts'])
    ->middleware('auth:sanctum')
    ->name('user.posts');
    
Route::get('/users/{userId}/posts', [UserPostController::class, 'index'])
    ->middleware('auth')
    ->name('user.posts.index');

Route::get('/api/users/{user}/posts', [UserPostController::class, 'userPosts'])
    ->middleware('auth:sanctum')
    ->name('api.user.posts');