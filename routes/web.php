<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
route::get('/ele2022', function() {
    if(env('APP_TEST')) {
        return json_decode(file_get_contents('ele2022.json'), true);
    }

    return json_decode(Http::get(env('TSE_API')), true);
})->name('ele2022');
