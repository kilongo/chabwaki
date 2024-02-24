<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product_image;
use Carbon\Carbon;
//use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;
//use App\Models\Product_image;

class MonproduitEdit extends Component
{
    use WithFileUploads;
    public $nom,$marque,$prix,$couleur,$taille,$poids,$quantite,$description, $images = [];
    public $product_id;

    public function mount($id)
    {
        $article = Article::where('id', $id)->first();
        
        $this->product_id = $article->id;
        $this->nom = $article->nom;
        $this->marque = $article->marque;
        $this->prix = $article->prix;
        $this->couleur = $article->couleur;
        $this->taille = $article->poids;
        $this->quantite = $article->quantite;
        $this->poids = $article->poids;
        $this->description = $article->description;
   
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nom' => 'required',
            'marque' => 'required',
            'prix' => 'required',
            'couleur' => 'required',
            'taille' => 'required',
            'quantite' => 'required',
            'poids' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateProduct()
    {
        $this->validate([
            'nom' => 'required',
            'marque' => 'required',
            'prix' => 'required',
            'couleur' => 'required',
            'taille' => 'required',
            'quantite' => 'required',
            'poids' => 'required',
            'description' => 'required',
        ]);

        $article = Article::where('id', $this->product_id)->first();
        $article->nom = $this->nom;
        $article->marque = $this->marque;
        $article->prix= $this->prix;
        $article->couleur = $this->couleur;
        $article->taille = $this->taille;
        $article->quantite = $this->quantite;
        $article->poids = $this->poids;
        $article->description = $this->description;
        
        $article->save();

        if($this->images != ''){
            foreach ($this->images as $key => $image) {
                $pimage = new Product_image();
                $pimage->product_id = $article->id;
    
                $imageName = Carbon::now()->timestamp . $key . '.' . $this->images[$key]->extension();
                $this->images[$key]->storeAs('all', $imageName);
    
                $pimage->image = $imageName;
                $pimage->save();
            }
        }

        $this->images = '';
        
        session()->flash('message', 'Product updated successfully');
        return redirect()->route('MesProduits');
    }

    public function deleteImage($id)
    {
        $image = Product_image::where('id', $id)->first();
        $image->delete();

        session()->flash('message', 'Product image deleted successfully');
       
    }

    public function render()
    {
        
        $productImages = Product_image::where('product_id', $this->product_id)->get();

        
        //return view('livewire.monproduit-edit');
        return view('livewire.monproduit-edit', ['productImages'=>$productImages])->layout('base');
        
       


    }
}
