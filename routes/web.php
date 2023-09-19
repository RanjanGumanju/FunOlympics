<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.index');
Route::get('/news-list', [App\Http\Controllers\FrontController::class, 'newsList'])->name('front.news');
Route::get('/news-list/{id}', [App\Http\Controllers\FrontController::class, 'newsDetail'])->name('front.news.detail');

Route::get('/live-match', [App\Http\Controllers\FrontController::class, 'liveMatching'])->name('front.live.match');
Route::get('/front-blogs', [App\Http\Controllers\FrontController::class, 'bloglist'])->name('bloglist');
Route::get('/live-match/{id}', [App\Http\Controllers\FrontController::class, 'liveMatchDetail'])->name('front.live.match.detail');

Route::get('/high-lights', [App\Http\Controllers\FrontController::class, 'highlights'])->name('high-lights.index');
Route::get('/high-lights/{id}', [App\Http\Controllers\FrontController::class, 'highlightsDetail'])->name('high-lights.detail');



// Route::get('/', function () {

//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('delet', [App\Http\Controllers\CategoryController::class, 'delet'])->name('category.delet');   

Route::group(['middleware' => ['auth']], function() {
    Route::post('game-comment', [App\Http\Controllers\GameController::class, 'postComment'])->name('game.comment');   


    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('games', GameController::class); 

    Route::resource('highlights', HighlightController::class);   
    Route::resource('news', NewsController::class);

    Route::post('blogs-category', [App\Http\Controllers\BlogController::class, 'category'])->name('blogs.category');   
    

    Route::resource('blogs', BlogController::class);

    Route::resource('Category', CategoryController::class);
    Route::get('delet', [App\Http\Controllers\CategoryController::class, 'delet'])->name('category.delet');   







    Route::group(['prefix' => 'user'], function() {
        Route::get('/games', [App\Http\Controllers\User\GameController::class, 'index'])->name('user.games.index');
        Route::get('/games/{id}', [App\Http\Controllers\User\GameController::class, 'show'])->name('user.games.show');


    });

});
