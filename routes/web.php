<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tequiController;
use App\Mail\NoautorizadoMailable;

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

Route::resource('tequila', tequiController::class)->middleware(['auth','verified']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/tequila/index', function () {
        return view('/tequila/index');
    })->name('Inicio');
});

Route::get('/error-page', function () {

    Mail::to('martinez44@outlook.com')
        ->send(new NoautorizadoMailable);

    return view('error-page'); 
})->name('error-page');


Route::get('/Conocemos', function () {     
    return view('Conocemos'); 
})->name('Conocemos');

