<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user=User::create([
            'name' => 'gehad',
            'email' => 'gehad.ehab.mosaad@gmail.com',
            'gender'=>'female',
            'password'=>Hash::make('12345678'),

        ]);
        $user->assignRole('admin');
    }
}
