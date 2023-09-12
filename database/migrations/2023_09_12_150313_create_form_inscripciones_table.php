<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('inscripciones', function (Blueprint $table) {
        $table->id('IdMje'); // Reemplaza 'IdMje' con el nombre real de tu clave primaria.
        $table->string('NombreyAp', 50);
        $table->string('Email', 50);
        $table->string('Tel', 50);
        $table->string('Mje', 50);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_inscripciones');
    }
};
