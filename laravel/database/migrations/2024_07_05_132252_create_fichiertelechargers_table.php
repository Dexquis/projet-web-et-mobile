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
        Schema::create('fichiertelechargers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etudiant_id'); // Colonne de clé étrangère
            $table->unsignedBigInteger('fichier_id'); // Colonne de clé étrangère
            $table->timestamps();

            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('fichier_id')->references('id')->on('fichiers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichiertelechargers');
    }
};
