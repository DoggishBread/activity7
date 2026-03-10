<?php

use Illuminate\Database\Seeder;
use App\Course;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(KitSeeder::class);
        
        factory(Course::class, 100)->create();
    }
}