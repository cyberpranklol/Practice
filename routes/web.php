<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $ocene = \App\Models\Ocene::all();
    return view('welcome', compact('ocene'));
});

Route::view('/dodaj-ocenu', 'addGrade');

Route::post('/add-user-grade', [\App\Http\Controllers\OceneController::class, 'addGrade']);
