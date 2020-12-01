<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Giancarl021',
            'email' => 'gian.f.luz@hotmail.com',
            'password' => bcrypt('changeme'),
        ]);
    }
}
