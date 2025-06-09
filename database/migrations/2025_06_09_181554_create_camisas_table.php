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
        Schema::create('camisas', function (Blueprint $table) {
            $table->id();
            $table->text('imagen')->nullable(); // Imagen en base64
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Llave foránea al usuario
            $table->string('talla'); // Talla de la camisa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camisas');
    }
};
