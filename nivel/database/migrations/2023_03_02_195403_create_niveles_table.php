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
        Schema::create('niveles', function (Blueprint $table) {
            $table->date('fecha');
            $table->string('ot');
            $table->string('tecnico');
            $table->string('supervisor');
            $table->string('tm');
            $table->string('aceitm');
            $table->string('aceited');
            $table->string('refri');
            $table->string('orden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles');
    }
};
