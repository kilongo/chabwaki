<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ProduitAccueil extends Component
{
    public function render()
    {
        $articles = Article::all();
       // return view('livewire.article_', ['articles'=>$articles])->layout('base');
        return view('livewire.produit-accueil', ['articles'=>$articles])->layout('base');
    }
}
