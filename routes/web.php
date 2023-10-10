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

Route::get('/', function () {return view('index');});
Route::get('/winner-page/{id}', [\App\Http\Controllers\Web\LandingController::class, 'winnerPage'])
    ->name('winner');
Route::get('/sponsor-page/{id}', [\App\Http\Controllers\Web\LandingController::class, 'sponsorPage'])
    ->name('sponsor');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/qr-trafic', [App\Http\Controllers\HomeController::class, 'qrTrafic'])->name('qrTrafic');
Route::get('/qr-winner', [App\Http\Controllers\HomeController::class, 'qrWinner'])->name('qrWinner');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/winner-qr/{id}', [\App\Http\Controllers\Admin\QrController::class, 'winner_qr_generate'])
        ->name('winner-qr');
    Route::get('/print-qr-winner/{id}', [App\Http\Controllers\Admin\QrController::class, 'print_qr'])->name('printqrWinner');




    Route::get('/sponsor-qr/{id}', [\App\Http\Controllers\Admin\QrController::class, 'sponsor_qr_generate'])
        ->name('sponsor-qr');

    Route::prefix('qr')->group(function () {
        Route::post('/update/{id}', [\App\Http\Controllers\Admin\QrController::class, 'update'])
            ->name('qr.update');
    });

});
