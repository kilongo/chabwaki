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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('id_boutique');
            $table->string('prix');
            $table->string('quantite');
            $table->string('url_image_1')->nullable(); // Suppression de ->change()
            $table->string('url_image_2')->nullable(); // Suppression de ->change()
            $table->string('url_image_3')->nullable(); // Suppression de ->change()
            $table->string('url_image_4')->nullable(); 
            $table->string('id_secteur');
            $table->string('marque');
            $table->string('couleur');
            $table->string('taille');
            $table->string('poids');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
