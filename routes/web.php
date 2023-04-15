<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('form_submission');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('form-submission', [\App\Http\Controllers\FormController::class, 'getLeads'])->name('form_submission');
});

require __DIR__.'/auth.php';



Route::get('/get-case-value',[\App\Http\Controllers\FormController::class, 'index'])->name('get_case_value');
Route::get('/thank-you',[\App\Http\Controllers\FormController::class, 'thankyou'])->name('thank-you');
Route::post('/get-case-value',[\App\Http\Controllers\FormController::class, 'store'])->name('submit-form');
