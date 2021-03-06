<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ferney Castañeda',
            'email' => 'correo@correo.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
