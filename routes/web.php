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

// Route::get('/', function () {
//     return view('welcome');
// });

// homes index
Route::get('/', App\Livewire\Homes\Index::class)->name('homes.index');

// armadas index, create, edit
Route::get('/armada', App\Livewire\Armadas\Index::class)->name('armadas.index');
Route::get('/armada/create', App\Livewire\Armadas\Create::class)->name('armadas.create');
Route::get('/armada/edit/{id}', App\Livewire\Armadas\Edit::class)->name('armadas.edit');

// tperbaikans index, create, edit
Route::get('/tperbaikan', App\Livewire\Tperbaikans\Index::class)->name('tperbaikans.index');
Route::get('/tperbaikan/create', App\Livewire\Tperbaikans\Create::class)->name('tperbaikans.create');
// Route::get('/tperbaikan/edit/{id}', App\Livewire\Tperbaikans\Edit::class)->name('tperbaikans.edit');
