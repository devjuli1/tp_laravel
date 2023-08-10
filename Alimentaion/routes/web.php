<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Route::get('inscription', [registerController::class, 'inscriptionadmin'])->name('inscription');
// Route::post('inscriptionadmin',[registerController::class, 'adminformulaire']);

// Route::get('utilisateur', [registerController::class, 'utilisateurs'])->name('utilisateurs');
// Route::controller(AuthController::class)->group(function(){
//     Route::get('/register','register')->name('register');
// });
Route::get('/inscription', [AuthController::class, 'register']);