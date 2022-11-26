<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/inquiry' ,\App\Http\Controllers\Inquiry\IndexController::class )
->name('inquiry.index');

Route::post('/inquiry/create' ,\App\Http\Controllers\Inquiry\CreateController::class )
->name('inquiry.create');

Route::get('/response' ,\App\Http\Controllers\Response\IndexController::class )
->middleware('auth')
->name('response.index');

Route::post('/response/create' ,\App\Http\Controllers\Response\CreateController::class )
->name('response.create');

Route::get('/response/update/{inquiryId}' ,\App\Http\Controllers\Response\Update\IndexController::class )
->name('response.update.index')->where('inquiryId','[0-9]+');

Route::put('/response/update/{inquiryId}' ,\App\Http\Controllers\Response\Update\PutController::class )
->name('response.update.put')->where('inquiryId','[0-9]+');

Route::delete('/response/delete/{inquiryId}' ,\App\Http\Controllers\Response\DeleteController::class )
->name('response.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
