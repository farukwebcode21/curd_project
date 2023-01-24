<?php

use App\Http\Controllers\CurdController;
use Faker\Guesser\Name;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CurdController::class, 'showData'])->name('showData');
Route::get('/add-data', [CurdController::class, 'addData'])->name('addData');
Route::post('/store-data',[CurdController::class, 'storeData'])->name('store-data');

Route::get('/edit-post/{id}', [CurdController::class, 'edit'])->name('post.edit');
Route::post('/update-post/{id}', [CurdController::class, 'update'])->name('post.update');
Route::get('/delete-post/{id}', [CurdController::class, 'delete'])->name('delete.post');
