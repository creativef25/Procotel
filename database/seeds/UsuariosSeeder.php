<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rol;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_admin =  Rol::where('nombre', 'admin')->first();
        $rol_user =  Rol::where('nombre', 'user')->first();

        $usu = new User();
        $usu->name = 'comprador';
        $usu->email = 'comprador@procotel.com';
        $usu->password = bcrypt('password');
        $usu->id_rol = $rol_user->id;
        $usu->save();

        $usu = new User();
        $usu->name = 'administrador';
        $usu->email = 'administrador@procotel.com';
        $usu->password = bcrypt('password');
        $usu->id_rol = $rol_admin->id;
        $usu->save();

    }
}
