<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'biblioteca_admin',
            'nombre' => 'Administrador',
            'password' => bcrypt('pass123')
        ]);


        DB::table('usuarios')->insert([
            'usuario' => 'rat',
            'nombre' => 'Roosvelt',
            'password' => bcrypt('pass123')
        ]);


        DB::table('usuarios_roles')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);


        DB::table('usuarios_roles')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);

    }
}
