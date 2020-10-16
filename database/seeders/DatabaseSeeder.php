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
>>>>>>> 414792628fff0f89663cc32642cc2cbee6a964ff
    }
}
