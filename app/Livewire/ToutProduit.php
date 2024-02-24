<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ToutProduit extends Component
{
    public function render()
    {   $articles = Article::get();
        return view('livewire.tout-produit', ['articles'=>$articles]);
        //return view('livewire.tout-produit');
    }
}
