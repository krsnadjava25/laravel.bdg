<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment !== "production") {
            factory(App\Video::class, 5)->create();
        }
    }
}
