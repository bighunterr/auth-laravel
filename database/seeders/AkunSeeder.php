<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [

                'nama_lengkap'=>'Rafli Solihudin',
                'email'=>'solihudinr@gmail.com',
                'password'=>Hash::make('Hawu1245')
            ],

            [

                'nama_lengkap'=>'FajarNugraha',
                'email'=>'fajar.janug@gmail.com',
                'password'=>Hash::make('13April2001')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
