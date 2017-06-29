<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(['nombre' => 'pedro','correo' => 'yo1@hotmail.es','password' => '123456','codigo' => 332211,'rol' => 'Admin','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'juan','correo' => 'ya1@hotmail.es','password' => '123456','codigo' => 221133,'rol' => 'Admin','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'jose','correo' => 'ye1@hotmail.es','password' => '123456','codigo' => 112233,'rol' => 'Admin','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'emma','correo' => 'we1@hotmail.es','password' => '123456','codigo' => 445566,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'petra','correo' => 'wa1@hotmail.es','password' => '123456','codigo' => 554466,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'kira','correo' => 'wi1@hotmail.es','password' => '123456','codigo' => 665544,'rol' => 'Prestador','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'solano','correo' => 'wo1@hotmail.es','password' => '123456','codigo' => 778899,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'isabel','correo' => 'wu1@hotmail.es','password' => '123456','codigo' => 887799,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'reina','correo' => 'fe1@hotmail.es','password' => '123456','codigo' => 998877,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'ulises','correo' => 'fa1@hotmail.es','password' => '123456','codigo' => 115599,'rol' => 'Prestador','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'ana','correo' => 'fi1@hotmail.es','password' => '123456','codigo' => 995511,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'wilson','correo' => 'fo1@hotmail.es','password' => '123456','codigo' => 551199,'rol' => 'Prestador','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'omar','correo' => 'fu1@hotmail.es','password' => '123456','codigo' => 335577,'rol' => 'Prestador','carrera_id' => 6]);
        DB::table('users')->insert(['nombre' => 'margo','correo' => 'se1@hotmail.es','password' => '123456','codigo' => 557733,'rol' => 'Prestador','carrera_id' => 5]);
        DB::table('users')->insert(['nombre' => 'susan','correo' => 'sa1@hotmail.es','password' => '123456','codigo' => 775533,'rol' => 'Prestador','carrera_id' => 5]);
    }
}
