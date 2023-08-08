<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            ['name'=>'Paula Vargas',
            'tipo_documento'=>'cedula',
            'numero'=>'1005691929',
            'estado'=>'1',
            'pensionado'=>'1',
            'email'=>'paula@paula.com',
            'password'=>'Super123*'],
            [
            'name'=>'William Zambrano',
            'tipo_documento'=>'cedula',
            'numero'=>'1234567',
            'estado'=>'1',
            'pensionado'=>'0',
            'email'=>'willi@willi.com',
            'password'=>'Super123*'
            ]
        ]);
    }
}
