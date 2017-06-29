<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);/// le puse Carreras
        $this->call(ProgramasTableSeeder::class);/// le puse Programas
        $this->call(UsersTableSeeder::class);/// le puse Users
    }
}
