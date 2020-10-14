<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default admin data
        User::create([
            'name' => 'Default Admin',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'email_verified_at' => Date(now()),
            'password' => Hash::make('admin'),
        ]);
    }
}
