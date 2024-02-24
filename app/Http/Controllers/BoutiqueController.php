<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;
use App\Models\User; 

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("boutique");
    }
    public function CreerBoutique()
    {
        return view("creer-boutique");
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
            'nom_boutique' => 'required|string',
            'categorie_boutique' => 'required|string',
            'province' => 'required|string',
            'ville' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'adresse' => 'required|string',
            'nom_proprietaire' => 'required|string',
            'prenom_proprietaire' => 'required|string',
            'password' => 'required|string',
            //'password' => 'required|string|min:8|confirmed', // Le champ confirm_password est automatiquement confirmé par Laravel lors de la validation
        ]);
        try {
                $boutique = new Boutique();
                $boutique->nom_boutique = $request->input('nom_boutique');
                $boutique->categorie_boutique = $request->input('categorie_boutique');
                $boutique->province = $request->input('province');
                $boutique->ville = $request->input('ville');
                $boutique->adresse = $request->input('adresse');
                $boutique->save();

                $idBoutique = $boutique->getKey();
               // Créer une nouvelle instance de User avec les données du formulaire
                $user = new User();
                $user->nom_proprietaire = $request->input('nom_proprietaire'); 
                $user->prenom_proprietaire = $request->input('prenom_proprietaire');
                $user->telephone = $request->input('telephone');
                $user->email = $request->input('email');
                $user->id_boutique = $idBoutique; 
                $user->password = bcrypt($request->input('password'));
                $user->save();
                return redirect()->route('CreerBoutique');
               
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'enregistrement. Veuillez réessayer.']);
        //     if ($e->getCode() == '23000') {
        //         // La violation d'intégrité s'est produite, ce qui signifie que l'e-mail est en double
        //         // Rediriger l'utilisateur avec un message d'erreur approprié
        //         return redirect()->back()->withInput()->withErrors(['email' => 'L\'adresse e-mail est déjà utilisée.']);
        //     } else {
        //         // Autre erreur de base de données
        //         // Rediriger l'utilisateur avec un message d'erreur générique
        //         return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'enregistrement. Veuillez réessayer.']);
        //     }
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Boutique $boutique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boutique $boutique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boutique $boutique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boutique $boutique)
    {
        //
    }
}
