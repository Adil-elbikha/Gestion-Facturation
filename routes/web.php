<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\FactureController;


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

Route::get('/test', [Client ::class, 'index']);
Route::delete('/client/{id}', [ClientController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/Client',\App\Http\Controllers\ClientController::class);

Route::get('/Facture/prod/{id}', [FactureController::class, 'getProd']);
Route::resource('/Facture',\App\Http\Controllers\FactureController::class);

Route::resource('/Produit',\App\Http\Controllers\ProduitController::class);
Route::delete('/produit/{id}', [ProduitController::class, 'destroy']);

Route::get('/prod/{id}', [ProduitController::class, 'getProduct']);






//Route::get('/Client',[\App\Http\Controllers\ClientController::class,'index'])->name('index.blade');
