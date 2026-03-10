<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'Administrative']);
        $teacherRole = Role::create(['name' => 'Teacher']);
        $studentRole = Role::create(['name' => 'Student']);

        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $adminRole->id
        ]);

        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $teacherRole->id
        ]);

        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $studentRole->id
        ]);
    }
}