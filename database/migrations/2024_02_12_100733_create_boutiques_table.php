<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom_boutique');
            $table->string('categorie_boutique');
            $table->string('province');
            $table->string('ville');
           // $table->string('telephone');
            //$table->string('email');
            $table->string('adresse');
            //$table->string('nom_proprietaire');
           // $table->string('prenom_proprietaire');
            //$table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boutiques');
    }
};
