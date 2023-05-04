<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name'=> 'Alexandra Quintanilla ',
            'email' => 'alexandra@gmail.com',
            'password'=> bcrypt('12345678')
        ]);
            
            // Srol = Role::create([ 'name'=>'Administrador"]);
            // Spermisos = Permission: :pluck('*id', 'id')->alL();
            // Srol->syncrermissions($permisos);
            
            $usuario->assignRole('Administrador');
    }
    }
