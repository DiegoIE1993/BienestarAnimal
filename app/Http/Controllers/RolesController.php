<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        return view('roles.index');
        // Busque el permiso que cree
        $permission = Permission::find(13);

        // Busque el rol al que esta asociado el usuario
        $rol = Role::find(3);

        // Le doy al rol asociado al usuario, el permiso que creamos
        $rol->givePermissionTo($permission);
        
        //$user = User::find(2);
        //$user->assignRole('Veterinario');
    }

    public function create(Request $request)
    {
        $role = Role::create(['name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);
    }
}
