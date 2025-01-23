<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
route::get("/posts/create", [PostController::class, "create"]);
route::get('/posts/{post}', [PostController::class, 'show']);
route::post("/posts", [PostController::class, "store"]);
route::get('/posts/{post}/edit', [PostController::class, 'edit']);
route::put('/posts/{post}', [PostController::class, 'update']);
route::delete('/posts/{post}', [PostController::class, 'delete']);
//"/posts/{対象のデータID}"にgetリクエストが来たらpostcontrollerのshowメソッドを実行する