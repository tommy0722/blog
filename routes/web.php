<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
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
    // return 'hi';
    return  view('welcome');
});
Route::get('/cat/{id}/{name}', function ($id,$name) {
    return  "我是第 $id 的貓: $name";
});
//           URL        class                    function
Route::get("/about",[welcomeController::class, 'about']);
                                                //只顯示insex,show
Route::resource('posts',PostController::class)->only(['index','show']);
                                                //不顯示insex,show
// Route::resource('posts',PostController::class)->except(['index','show']);
Route::resource("posts.commits",PostController::class);