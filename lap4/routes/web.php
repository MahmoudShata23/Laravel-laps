<?php

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

// Route::get('/', function () 
// {
//     return view('welcome');
// });
// Route::get('/test',function()
// {
// return view('apptest');
// });
use App\Http\Controllers\PostController;

// Route::get('/posts', [PostController::class,"index"]);
// // show
// Route::get('/posts/{id}', [PostController::class,"show"]);
// // update
// Route::get('/posts/{id}/edit', [PostController::class,"edit"]);
// // Route::redirect('/test', '/h');
// Route::post('/posts/{id}',[PostController::class,"update"]);

// Route::get('test/create',[PostController::class,"create"]);

// Route::post('/posts',[PostController::class,"store"]);
Route::resource ("posts",PostController::class);