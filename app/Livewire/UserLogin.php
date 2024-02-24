<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserLogin extends Component
{   
    public $identifier;
    public $password;

    public function login()
    {
        // Vérifier si l'identifiant est un email ou un numéro de téléphone
        $field = filter_var($this->identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'telephone';

        // Authentifier l'utilisateur
        if (Auth::attempt([$field => $this->identifier, 'password' => $this->password])) {
            // Authentification réussie, rediriger l'utilisateur vers la page d'accueil
            return redirect()->route('CreerBoutique');
        } else {
            // Authentification échouée, afficher un message d'erreur
            session()->flash('error', 'Identifiants incorrects.');
        }
    }
    public function logout()
    {
        Auth::logout();

        // Rediriger vers une autre page après la déconnexion si nécessaire
        return redirect()->route('CreerBoutique');
    }
    public function render()
    {
        return view('livewire.user-login');
    }
}
