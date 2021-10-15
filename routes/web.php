<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [CompaniesController::class,'index'])->middleware(['auth'])->name('companies');
Route::post('/save_company', [CompaniesController::class,'save'])->middleware(['auth'])->name('save_company');
Route::get('/get_company/{id}', [CompaniesController::class,'get'])->middleware(['auth'])->name('get_company');
Route::get('/delete_company/{id}', [CompaniesController::class,'delete'])->middleware(['auth'])->name('delete_company');
Route::post('/edit_company', [CompaniesController::class,'edit'])->middleware(['auth'])->name('edit_company');


require __DIR__.'/auth.php';
