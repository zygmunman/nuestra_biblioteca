<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibrosMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_materias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libros_id');
            $table->foreign('libros_id', 'fk_librosmaterias_libros')->references('id')->on('libros')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('materias_id');
            $table->foreign('materias_id', 'fk_librosmaterias_materias')->references('id')->on('materias')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros_materias');
    }
}
