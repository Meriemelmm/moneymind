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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('souhait');
            $table->decimal('prix_total', 10, 2);
            $table->decimal('montant_economise', 10, 2)->default(0);
            $table->timestamps();
            $table->enum('priority', ['Haute', 'Moyenne', 'Basse']);
            $table->enum('status', ['pending', 'completed'])->default('pending');
        });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
