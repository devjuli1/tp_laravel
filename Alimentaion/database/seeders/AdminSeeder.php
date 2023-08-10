<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::create([
        'nom'=>'KYELEM',
        'prenom'=>'Julienne',
        'numero'=>'62810499',
        'domicile'=>'Koupela',
        'password'=>Hash::make('password'),//password
        'role_id'=>1
    ]);

    User::create([
        'nom'=>'DAH',
        'prenom'=>'Gilbert',
        'numero'=>'62810477',
        'domicile'=>'Tougan',
        'password'=>Hash::make('password'),//password
        'role_id'=>2
    ]);
    }
}
