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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('p/create', [App\Http\Controllers\PostCOntroller::class, 'create'])->name('post.create');
Route::get('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'profile'])->name('profile.show');
Route::get('profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::get('p/{post}', [App\Http\Controllers\PostCOntroller::class, 'show'])->name('post.show');
Route::post('p', [App\Http\Controllers\PostCOntroller::class, 'store'])->name('post.store');



