<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Livewire\ArticleForm;
use App\Livewire\MonproduitEdit;
use App\Livewire\ViewProduit;
use App\Livewire\UserLogin;



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
    return view('index');
});
//code Dieume
Route::resources([
    "secteur"=>SecteurArticleController::class,
    "adress"=>AdresseController::class,
    "contact"=>ContactController::class,
    "article"=>ArticleController::class,
    "user"=>UserController::class,
    "Nos-produits"=>BoutiqueController::class,   
]);
//Code christian
Route::post('/enregistrer-boutique', [BoutiqueController::class, 'store'])->name('enregistrer-boutique');
Route::post('/enregistrer-article', [ArticleController::class, 'store'])->name('enregistrer-article');
//Afficher la page creation boutique
Route::get('/Nouvelle-boutique', [BoutiqueController::class, 'CreerBoutique'])->name('CreerBoutique');
//Afficher la page de nouveau produit
Route::get('/Nouveau-produit', [ArticleController::class, 'NouveauProduit'])->name('NouveauProduit');
//Afficher tous mes produits
Route::get('/Mes-produits', [ArticleController::class, 'MesProduits'])->name('MesProduits');
//Afficher tous mes produits
//Route::get('/Mes-produits/edit/{id}', MonproduitEdit::class)->name('editProducts');
Route::get('/Mes-produits/edit/{id}', MonproduitEdit ::class)->name('editProducts');
//Afficher le produit apres click
Route::get('/ViewProduct/{id}', [ArticleController::class, 'ViewProduct'])->name('ViewProduct');
//Route pour la page de connexion
Route::get('/Login', [UserController::class, 'UserRedirect'])->name('UserRedirect');
//Route pour gerer les authentification de la page Login
// Route::get('/login', UserLogin::class)->name('login');
Route::get('/logout', [UserLogin::class, 'logout'])->name('logout');






