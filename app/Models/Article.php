<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'id_boutique', 'prix', 'quantite', 
        'url_image_1', 'url_image_2', 'url_image_3', 'url_image_4',
        'marque', 'couleur', 'poids', 'taille',
    ];

    //protected $table = 'articles';
}
