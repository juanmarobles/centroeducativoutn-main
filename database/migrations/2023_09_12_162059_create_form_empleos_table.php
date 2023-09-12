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
        Schema::create('empleos', function (Blueprint $table) {
            $table->id('Id'); // Reemplaza 'Id' con el nombre real de tu clave primaria.
            $table->string('NombreyAp', 50);
            $table->string('Email', 50);
            $table->string('Tel', 50);
            $table->string('Asunto', 50);
            $table->string('Mje', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_empleos');
    }
};
