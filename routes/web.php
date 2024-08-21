<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Profiles;
use App\Models\Posts;
use App\Models\Prof;

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::middleware('auth')->group(function () {
    Route::get('/home', [Profiles::class, 'index'])->name('home.index');
    Route::get('/show/{id}', [Profiles::class, 'show'])->name('home.show'); 
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('posts', PostsController::class); // after to get and post mothods 
    Route::get('/search', [PostsController::class, 'search'])->name('posts.search');



});

// If you are already logged into the system, you will not have the auth to go back 
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/home', [Profiles::class, 'store'])->name('home.store');
    Route::get('/register', [Profiles::class, 'create'])->name('home.create');
});


