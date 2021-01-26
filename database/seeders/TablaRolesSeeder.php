<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;




class TablaRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [

            'administrador',
            'editor',
            'supervisor'
        ];

        foreach($rols as $key => $value){

            DB::table('roles')->insert([

                'nombre' => $value,
                'created_at' => Carbon::now()->format('y-m-d H:i:s')
            ]);
        }
    }
}
