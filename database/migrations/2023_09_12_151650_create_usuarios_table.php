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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('IDUSUARIO'); // Reemplaza 'IDUSUARIO' con el nombre real de tu clave primaria.
            $table->string('NOMBRE', 50);
            $table->string('APELLIDO', 50);
            $table->string('EMAIL', 50);
            $table->string('ROL', 50);
            $table->string('PASSWORD', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
