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
        if (App\User::count() < 1) {
            ini_set('memory_limit', '-1'); // FOR FUN ONLY, NEVER EVER DO THIS AGAIN!!!
            factory(App\User::class, 146050)->create();
            // factory(App\User::class, 1460500)->create(); // Ready to LEVEL UP? >:)
        }
    }
}
