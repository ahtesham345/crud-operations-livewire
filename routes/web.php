<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\EditCar;
use App\Livewire\TestPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',TestPage::class);
Route::get('/cars',CarList::class)->name('all_cars');
Route::get('/add-car',AddCar::class)->name('add_car');
Route::get('/cars/edit/{id}',EditCar::class)->name('edit_car');
