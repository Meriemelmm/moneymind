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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_depense');
            $table->integer('montant');
            $table->integer('date_recurrence')->nullable();
            $table->date('date_depense')->nullable();
            $table->enum('type', ['non recurrent', 'recurrent']);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('categorie_id')->constrained('categories');
            
            // Créer les colonnes polymorphiques
            $table->unsignedBigInteger('depensable_id')->nullable(); // rend depensable_id nullable
            $table->string('depensable_type')->nullable(); // rend depensable_type nullable
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depenses');
    }
};
