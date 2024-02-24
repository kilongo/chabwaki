<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;
use App\Models\Product_image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ArticleForm extends Component
{
    use WithFileUploads;

   
    public $nom,$prix,$quantite,$marque,$taille,$couleur,$poids,$description;
    public $images = [];
    public $photoUrls = [];
    public $user;// juste pour tester

    public function mount()
    {
        $this->user = Auth::user(); // pour tester
    }

    public function render()
    {
        return view('livewire.article-form', [
            'user' => $this->user
        ]);
    }
    

    public function save()
        {
            $this->validate([
                'nom' => 'required|string',
                'prix' => 'required|string',
                'quantite' => 'required|string',
                'marque' => 'required|string',
                'taille' => 'required|string',
                'couleur' => 'required|string',
                'poids' => 'required|string',
                'description' => 'required|string',
                'images' => 'required',
               // 'photo.*' => 'image|max:10240', // Validation pour chaque photo
            ]);

            

            $article = new Article();
            $article->nom = $this->nom;
            $article->prix = $this->prix;
            $article->quantite = $this->quantite;
            $article->marque = $this->marque;
            $article->taille = $this->taille;
            $article->couleur = $this->couleur;
            $article->poids = $this->poids;
            $article->description = $this->description;
            $article->id_boutique = "1";
            $article->id_secteur = "2";
            $article->save();

            foreach ($this->images as $key => $image) {
                $pimage = new Product_image();
                $pimage->product_id = $article->id;
    
                $imageName = Carbon::now()->timestamp . $key . '.' . $this->images[$key]->extension();
                $this->images[$key]->storeAs('all', $imageName);
    
                $pimage->image = $imageName;
                $pimage->save();
            }
    
            $this->title = '';
            $this->images = '';

            $this->nom = '';
            $this->prix = '';
            $this->quantite = '';
            $this->nom= '';
            $this->marque= '';
            $this->taille= '';
            $this->couleur= '';
            $this->poids= '';
            $this->description= '';
            
            session()->flash('message', 'Product added successfully');
            
            //return redirect()->route('NouveauProduit');
    }

    
}
