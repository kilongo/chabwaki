<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
//use Illuminate\Support\Facades\DB;


class Article_ extends Component
{
    
 
    public function mount()
    {
       
    }
    public function render()
    {    
        $articles = Article::all();
       return view('livewire.article_', ['articles'=>$articles])->layout('base');
       
    }
}
