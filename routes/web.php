<?php

use Inertia\Inertia;
use App\Models\Scrapper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ScrapperController, UtilController};

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

Route::get('/before', [UtilController::class, 'home']);


Route::resource('scrapper', ScrapperController::class)->only('index', 'store');

Route::get('/', function () {
    return redirect()->route('scrapper.index');
})->name( 'homepage' );
