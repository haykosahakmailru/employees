<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SearchController;

Route::get('/', [EmployeesController::class, 'showEmployees'])->name('employees');

Route::get('/edit/{id}', [EmployeesController::class, 'showEditEmployee'])->name('edit');

Route::post('/edit/submit/{id}', [EmployeesController::class, 'edit'])->name('edit-submit');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/delete/{id}', [EmployeesController::class, 'delete'])->name('delete');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('/add/submit', [EmployeesController::class, 'add'])->name('add-submit');

