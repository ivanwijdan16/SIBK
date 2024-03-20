<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScholarshipApplicationController;

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
    return view('index');
});

// Route for displaying scholarship application form
Route::get('/beasiswa', function () {
    return view('daftarBeasiswa');
})->name('beasiswa.form');

// Route for storing scholarship application data
Route::post('/beasiswa', [ScholarshipApplicationController::class, 'store'])->name('beasiswa.store');

// Route for displaying scholarship application results
Route::get('/hasil', function () {
    // Retrieve scholarship applications from database
    $applications = \App\Models\ScholarshipApplication::all();

    // Pass retrieved data to view
    return view('hasilBeasiswa', compact('applications'));
})->name('hasil.index');