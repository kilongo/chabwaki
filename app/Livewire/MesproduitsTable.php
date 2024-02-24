<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;
use App\Models\Product_image;


class MesproduitsTable extends Component
{
    public function render()
    {   $articles = Article::get();
        
        return view('livewire.mesproduits-table', ['articles'=>$articles])->layout('livewire.layouts.base');
        //return view('livewire.product.product-component', ['products'=>$products])->layout('livewire.layouts.base');
    }

    public function deleteProduct($id)
    {
        $article = Article::where('id', $id)->first();
        $article->delete();

        //Delete Multiple Images
        $images = Product_image::where('product_id', $id)->get();
        foreach($images as $image){
            $image->delete();
        }

        session()->flash('message', 'Product has been deleted successfully');
    }
}
