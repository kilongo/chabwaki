<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\Crypt;

class ViewProduit extends Component
{
    public $product;

    public function mount($id)
    {
        // Récupérer le produit correspondant depuis la base de données
        try {
            $id = Crypt::decrypt($id);
            $this->product = Article::findOrFail($id);
    
            // Utilisez $decryptedId comme l'ID récupéré et déchiffré
        } catch (DecryptException $e) {
            abort(404); // Rediriger vers une page d'erreur 404 si le décryptage échoue
        }
        
    }

    public function render()
    {
        // Retourner la vue avec les données du produit
        return view('livewire.view-produit', ['product' => $this->product]);
    }
}