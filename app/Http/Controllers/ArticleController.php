<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
    public function NouveauProduit()
    {
        return view("publier-article");
    }
    public function MesProduits()
    {
        return view("mes-produits");
    }
    public function ViewProduct($id)
    {
        return view("page-regarder-produit",['id' => $id]);
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string',
            'prix' => 'required|string', 
            'quantite' => 'required|string', 
            'taille' => 'required|string',   
            'couleur' => 'required|string',  
            'description' => 'required|string',
            'poids' => 'required|string',
            'marque' => 'required|string',
            // Ajoutez les autres règles de validation ici
        ]);

        // Créer une nouvelle instance de Article avec les données du formulaire
        $article = new Article();
        $article->nom = $request->input('nom');
        $article->description = $request->input('description');
        $article->id_boutique="1";
        $article->prix = $request->input('prix');
        $article->quantite = $request->input('quantite');
        $article->url_image_1="";
        $article->url_image_2="";
        $article->url_image_3="";
        $article->url_image_4="";
        $article->id_secteur="1";
        $article->marque = $request->input('marque');
        $article->couleur = $request->input('couleur'); 
        $article->poids =$request->input('poids');
        $article->taille = $request->input('taille');
        
       
        $article->save();
       //return redirect()->route('articlesy.index')->with('success', 'Article enregistré avec succès.');
       // Enregistrer les images
      // Enregistrez les images
     // Initialiser les champs url_image avec une valeur par défaut
if ($request->hasFile('photos')) {
    // Initialiser un tableau pour stocker les chemins d'image
    $imagePaths = [];

    // Boucle à travers les fichiers téléchargés
    foreach ($request->file('photos') as $index => $photo) {
        // Ajoutez cette ligne après la boucle foreach
         var_dump($photo);

        // Vérifier si l'index est inférieur à 4 (nombre maximal d'images)
        if ($index < 4) {
            // Stocker l'image dans le dossier 'images'
            $path = $photo->store('images', 'public');
            // Ajouter le chemin à notre tableau
            $imagePaths[] = $path;
        } else {
            // Si plus de 4 images sont téléchargées, arrêter la boucle
            break;
        }
    }

    // Créer une nouvelle instance de Article avec les données du formulaire
    $article = new Article();
    $article->nom = $request->input('nom');
    $article->description = $request->input('description');
    $article->id_boutique = "1";
    $article->id_secteur = "4";
    $article->prix = $request->input('prix');
    $article->quantite = $request->input('quantite');
    $article->marque = $request->input('marque');
    $article->couleur = $request->input('couleur');
    $article->poids = $request->input('poids');
    $article->taille = $request->input('taille');
    
    // Attribuer les chemins d'image à l'article
    // Attribuer les chemins d'image à l'article
        $article->url_image_1 = isset($imagePaths[0]) ? $imagePaths[0] : '';
        $article->url_image_2 = isset($imagePaths[1]) ? $imagePaths[1] : '';
        $article->url_image_3 = isset($imagePaths[2]) ? $imagePaths[2] : '';
        $article->url_image_4 = isset($imagePaths[3]) ? $imagePaths[3] : '';


    // Enregistrer l'article dans la base de données
    $article->save();

    // Rediriger l'utilisateur ou effectuer d'autres actions après l'enregistrement
}



    
    
                // Rediriger l'utilisateur vers une autre page après l'enregistrement
               // return redirect()->route('articles.index')->with('success', 'Article enregistré avec succès.');
        
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
