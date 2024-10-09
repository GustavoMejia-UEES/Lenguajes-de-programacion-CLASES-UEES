<?php

use App\Http\Controllers\ProyectoController;
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

// Route::get('/proyecto', function () {
//     return view('proyecto.index');
// });

// Route::get('proyecto/create',[ProyectoController::class,'create']);
Route::get('/proyecto',[ProyectoController::class,'index'])->name('proyecto.index');
Route::get('/proyecto/create',[ProyectoController::class,'create'])->name('proyecto.create');
Route::post('/proyecto',[ProyectoController::class,'store'])->name('proyecto.store');
Route::get('/proyecto/{proyecto}/edit',[ProyectoController::class,'edit'])->name('proyecto.edit');
Route::put('/proyecto/{proyecto}/update',[ProyectoController::class,'update'])->name('proyecto.update');
Route::delete('/proyecto/{proyecto}/destroy',[ProyectoController::class,'destroy'])->name('proyecto.destroy');
// Route::resource('proyecto',ProyectoController::class);

