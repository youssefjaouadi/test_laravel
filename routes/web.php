<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/add-note', [\App\Http\Controllers\Note::class, 'addNoteView']);
Route::post('/submit-note', [\App\Http\Controllers\Note::class, 'submitNote']);
Route::get('/notes', [\App\Http\Controllers\Note::class, 'listNoteView'])->name('notes');



require __DIR__.'/auth.php';
