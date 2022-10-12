<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

// start for home page 
Route::get('/', [BlogController::class, 'index'])->name('index');
// end for home page 
// start for blog
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
// end for  blog 
// start for addblog 
Route::post('/addblog', [BlogController::class, 'add'])->name('add');
// end for addblog 
// start for manageblogs 
Route::get('/manageblogs', [BlogController::class, 'manageblogs'])->name('manageblogs');
// end for manageblogs 
// start for edit
Route::get('/edit-product/{id}', [BlogController::class, 'edit'])->name('editproduct'); 
// end for edit 
// start for updateproduct 
Route::post('/update-product/{id}', [BlogController::class, 'update'])->name('updateproduct');
// end for updateproduct 