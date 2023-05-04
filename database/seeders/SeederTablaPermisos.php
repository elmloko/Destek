<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla areass
            'ver-area',
            'crear-area',
            'editar-area',
            'borrar-area',

            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            'ver-tecnico',
            'crear-tecnico',
            'editar-tecnico',
            'borrar-tecnico'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
