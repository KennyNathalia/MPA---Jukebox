<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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

Route::get('/', [SongController::class, 'index']);

Route::get('/home', [SongController::class, 'index']);

Route::get('home/genre', [SongController::class, 'update'])->name('home.genre');

//Route::post('home/genre', 'SongController@update');

Route::get('/home/soul', [SongController::class, 'update']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/queue', function () {
    return view('queue');
});

Route::get('/genre', function () {
    $genre = DB::table('genres')->get();

    return view('genre', ['genre' => $genre]);
});

Route::get('/playlist', function () {
    return view('playlist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('/');

Auth::routes();

// Route::get('/home', function () {
//     $songs = DB::table('songs')->get();
    
//     return view('home', ['songs' => $songs]);
// });
