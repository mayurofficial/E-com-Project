<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Iluminate\Support\Facades\DB;
use Iluminate\Support\Facades\Hash;
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mayur Bahuguna',
            'email' => 'mayurbhgn108@gmail.com',
            'password' => Hash::make('12345')
        ])
    }
}
