<?php

namespace Database\Seeders;

use App\Models\User;
use App\Values\AbilitiesValues;
use App\Values\RolesValues;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\BouncerFacade as Bouncer;

class UserSeeder extends Seeder
{
    public function run()
    {
       User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'birthdate' => '1988-08-16',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);

        User::factory(20000)->create();

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'birthdate' => '1988-08-16',
            'email' => 'return@gmail.com',
            'password' => Hash::make('secret')
        ]);
    }
}
