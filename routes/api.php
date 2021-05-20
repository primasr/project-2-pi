<?php

use App\Http\Controllers\CountCommitController;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ApiController::class, 'index'])->name('index');
Route::get('/all', [ApiController::class, 'index'])->name('index');
Route::get('/names/{name}', [ApiController::class, 'show'])->name('show');
Route::post('/register', [ApiController::class, 'register'])->name('register');
Route::post('/login', [ApiController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', [ApiController::class, 'me'])->name('me');
    Route::post('/logout', [ApiController::class, 'logout'])->name('logout');    
    Route::put('/names/{name}/edit', [ApiController::class, 'update'])->name('update');
    Route::delete('/names/{name}/delete', [ApiController::class, 'destroy'])->name('destroy');
});

    


