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
        DB::table('users')
    }
}
