<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role; 
use App\Models\User\assignRole;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuario con el rol editor
        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $editor->roles()->attach(Role::where('name', 'email')->first());
       
        
        // Usuario con el rol moderador
        $moderador = User::create([
            'name' => 'moderador',
            'email' => 'moderador@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $moderador->roles()->attach(Role::where('name', 'email')->first());

        // Usuario con el rol SuperAdmin
        $superAdmin = User::create([
            'name' => 'superAdmin',
            'email' => 'superAdmin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        $superAdmin->roles()->attach(Role::where('name', 'email')->first());
    }
}
