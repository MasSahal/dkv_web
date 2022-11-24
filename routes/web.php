<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubmenuController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.template.index');
});

Route::resource('menu', MenuController::class);
Route::resource('submenu', SubmenuController::class);
Route::resource('post', PostController::class);
Route::resource('dosen', DosenController::class);
Route::get('getMenu', [MenuController::class, 'getAll'])->name('menu.get');
