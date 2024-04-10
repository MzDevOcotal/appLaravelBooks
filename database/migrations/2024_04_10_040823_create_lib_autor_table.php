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
        Schema::create('lib_autor', function (Blueprint $table) {
            $table->increments('cod_autor');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('nombrecompleto', 200);

            // definiendo las claves foraneas
            $table->unsignedInteger('cod_sexo')->nullable();

            //Indicando relación que existe entre ambas tablas
            $table->foreign('cod_sexo')->references('cod_sexo')->on('lib_sexo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_autor');
    }
};
