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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained()->cascadeOnDelete();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('sexe', ['homme', 'femme', 'autre']);
            $table->date('date_naissance');
            $table->string('adresse');
            $table->string('phone');
            $table->string('email');
            $table->string('photo');
            $table->date('date_inscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
