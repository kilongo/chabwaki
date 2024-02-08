<?php
namespace App\Http\Controllers;
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
    return view('welcome');
});
//code Dieume
Route::resources(["client"=>ClientController::class,]);
//Code christian
Route::get('/boutique', [ClientController::class, 'boutique'])->name('client.boutique');
Route::get('/produit', [ClientController::class, 'produit'])->name('client.produit');
Route::get('/creer_boutique', [ClientController::class, 'creer_boutique'])->name('client.creer_boutique');

