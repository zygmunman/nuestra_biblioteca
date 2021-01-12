<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMenusRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('menus_id');
            $table->foreign('menus_id', 'fk_menusroles_menus')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id', 'fk_menusroles_roles')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('menus_roles');
    }
}
