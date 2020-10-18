<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissions::class);
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
=======
        
>>>>>>> 0edd2b12798ec16640c64d7aff6de2fa0abc214c
    }
}
