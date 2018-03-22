<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment !== "production") {
            factory(App\Photo::class, 8)->create();
        }
    }
}
