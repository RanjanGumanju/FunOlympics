<?php

use App\Http\Controllers\GameController;
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
Route::get('/news-list', [App\Http\Controllers\FrontController::class, 'newsList'])->name('front.news12');
Route::get('/live-match', [App\Http\Controllers\FrontController::class, 'liveMatching'])->name('front.live.match');


// Route::get('/', function () {

//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('games', GameController::class);    
    Route::resource('news', NewsController::class);



    Route::group(['prefix' => 'user'], function() {
        Route::get('/games', [App\Http\Controllers\User\GameController::class, 'index'])->name('user.games.index');
        Route::get('/games/{id}', [App\Http\Controllers\User\GameController::class, 'show'])->name('user.games.show');


    });

});
