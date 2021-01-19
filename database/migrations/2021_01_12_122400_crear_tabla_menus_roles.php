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
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id', 'fk_menusroles_menus')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id', 'fk_menusroles_roles')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
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
        //Schema::dropIfExists('menus_roles');

        Schema::drop('menus_roles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('menu_id');
        Schema::drop('rol_id');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
