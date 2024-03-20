<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ConnectionController;


// use App\Models\Alum;
// use App\Models\Event;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/alum', AlumController::class);
Route::resource('/events', EventController::class);
Route::resource('/jobs', JobController::class);
// Custom route for applying to a job
Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])->name('jobs.apply');
Route::post('/jobs/{job}/storeApplication', [JobController::class, 'apply'])->name('jobs.storeApplication');

Route::resource('/connections', ConnectionController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
