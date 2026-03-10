<?php

use Illuminate\Database\Seeder;
use App\Kit;

class KitSeeder extends Seeder
{
    public function run()
    {
        Kit::create(['name' => 'StarterKit']);
        Kit::create(['name' => 'Educational Robotics Kit']);
        Kit::create(['name' => 'Kit5']);
    }
}