<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibrosPrestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros_prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id', 'fk_librosprestamos_libros')->references('id')->on('libros')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_librosprestamos_usuarios')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->string('prestado_a', 100);
            $table->date('fecha_presatamo');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libros_prestamos');
    }
}
