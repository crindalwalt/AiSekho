<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/teacher", function () {
    return "Teacher Page";
})->name("teacher.dashboard");

Route::get("/student", function () {
    return "Student Page";
})->name("student.dashboard");
Route::get('/admin', function () {
    return "Admin Page";
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


/**
* Sheraz will create all the layouts for three user types
* Talha will redesign the auth pages (login and register)
* Zain will seed 10 courses with factories and seeder , must exist in db
* Abdullah will creat the index and show pages for courses
* Hassan will create course pages (index , show and create) in the admin panel
* Imran will create the index and show pages for user panel


*/
