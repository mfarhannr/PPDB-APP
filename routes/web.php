<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\ValueComponent;
use App\Http\Livewire\Pages\CategoriesComponent;
use App\Http\Livewire\Pages\Categories\CreateComponent;
use App\Http\Livewire\Pages\Categories\UpdateComponent;

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

Route::get('/', HomeComponent::class)->name('dashboard');
Route::get("/categories", CategoriesComponent::class)->name('categories');
Route::get("/categories/create", CreateComponent::class)->name('categories.create');
Route::get("/categories/{categoriesId}/update", UpdateComponent::class)->name('categories.update');
Route::delete("/categories/{categoriesId}/delete", CategoriesComponent::class)->name('categories.delete');
Route::get("/value", valueComponent::class)->name('value');
