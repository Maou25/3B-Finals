<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Daryl Nicolas',
            'email' => 'darylnicolas25@gmail.com',
        ]);
        
        Student::factory(10)->create();
        Student::factory()->create([
            'firstname' => 'Daryl', 
            'lastname' => 'Nicolas',
            'birthdate' => '1998-10-02',
            'sex' => 'MALE',
            'address' => 'Tacloban',
            'year' => 3,
            'course' => 'BSIT',
            'section' => 'B',
        ]);

        Student::factory()->create([
            'firstname' => 'John', 
            'lastname' => 'Doe',
            'birthdate' => '2001-01-01',
            'sex' => 'MALE',
            'address' => 'Tacloban',
            'year' => 3,
            'course' => 'BSIT',
            'section' => 'B',
        ]);
    }
}