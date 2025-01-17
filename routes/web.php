<?php
use App\Http\Controllers\RegisterController;
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
    return view('');
});

Route::get('/cadastro', [RegisterController::class, 'create'])->name('cadastro.form');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('cadastro.store');
