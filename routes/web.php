<?php

use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\TallerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('asesoramiento', function(){
    return view('asesoramiento');
})->name('asesoramiento');

Route::get('contacto', function(){
    return view('contacto');
})->name('contacto');

Route::resource('talleres',TallerController::class);
Route::resource('programas',ProgramaController::class);


