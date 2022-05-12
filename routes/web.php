<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ContactController;
=======
use App\Http\Controllers\KasController;
>>>>>>> bc092720ee2f58d3c27ceb3f9c4731f75a4d4d31

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
<<<<<<< HEAD
    return view('home', [
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Jadon Sancho",
        "email" => "3103120008@student.smktelkom-pwt.sch.id",
        "gambar" => "sancho.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
    "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class); 
=======
    return view('index', [
    "title" => "Beranda"
    ]);
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/index', [KasController::class, 'index'])->name('kaskantor.index');
    Route::get('/create', [KasController::class, 'create'])->name('kaskantor.create');
    Route::post('/store', [KasController::class, 'store'])->name('kaskantor.store');
    Route::get('/{id}/show', [KasController::class, 'show'])->name('kaskantor.show');
    Route::post('/{id}/update', [KasController::class, 'update'])->name('kaskantor.update');
    Route::get('/{id}/destroy', [KasController::class, 'destroy'])->name('kaskantor.destroy');

});
>>>>>>> bc092720ee2f58d3c27ceb3f9c4731f75a4d4d31
