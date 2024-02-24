<div>
    <div id="formContainer">
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        <form wire:submit.prevent="login">
            @csrf
            <div class="form-group">
                <label>Numéro de Tél. ou adresse email</label>
                <input class="input" type="text"  wire:model="identifier" placeholder="Numéro de Tél. ou adresse email">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input class="input" type="text" wire:model="password" placeholder="Mot de passe">
            </div>
                   
            <button class="primary-btn order-submit" >Se connecter</button>
        </form>
    </div>
   
</div>


    
   
    
    
    
    
    
    
    
    
    
    
   
    
    
    
