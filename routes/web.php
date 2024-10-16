<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::resource('/posts', 'PostController', ['except' => ['index']]);

Route::post('post/create', [PostsController::class,
'create']);

Route::get('post/{id}/update-form', [PostsController::class, 'updateForm']);

Route::post('post/update', [PostsController::class,
'update']);
 
