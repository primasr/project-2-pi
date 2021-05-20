<?php

use App\Http\Controllers\CountCommitController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

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
    return view('pages.welcome');
});

Route::prefix('project')->group(function () {        
    Route::get('public', [CountCommitController::class, 'getWithoutKey'])->name('getWithoutKey');
    Route::get('private', [CountCommitController::class, 'getWithKey'])->name('getWithKey');
    Route::get('main', [CountCommitController::class, 'getMain'])->name('getMain');
    Route::post('public/apiwithoutkey', [CountCommitController::class, 'apiWithoutKey'])->name('apiWithoutKey');
    Route::post('private/apiwithkey', [CountCommitController::class, 'apiWithKey'])->name('apiWithKey');
    Route::post('main/apimain', [CountCommitController::class, 'apiMain'])->name('apiMain'); 

    Route::get('api-installation', [CountCommitController::class, 'apiInstallation'])->name('apiInstallation');
    Route::get('api-documentation', [CountCommitController::class, 'apiDocumentation'])->name('apiDocumentation');
});

// Route::prefix('gcc-api')->group(function () {
//     Route::get('/', [CountCommitController::class, 'index'])->name('index');
//     Route::get('/all', [CountCommitController::class, 'index'])->name('index');
//     Route::get('/name/{$name}', [CountCommitController::class, 'show'])->name('show');        
// });

// Route::prefix('tes')->group(function () {        
//     Route::get('tes', [CountCommitController::class, 'getTes'])->name('getTes');
//     Route::post('tes/hmm', [CountCommitController::class, 'tes'])->name('tes');
// });

// Route::prefix('auth')->group(function () {
//     Route::post('/register', [CountCommitController::class, 'register'])->name('register');
//     Route::post('/login', [CountCommitController::class, 'login'])->name('login');
// });




// Route::resource('project', CountCommitController::class);
// Route::resource('api', CountCommitController::class);
// Route::resource('auth', CountCommitController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
