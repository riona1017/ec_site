<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'owner1',
                'email' => 'owner1@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/01/01 11:11:11'
            ],
            [
                'name' => 'owner2',
                'email' => 'owner2@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/01/01 11:11:11'
            ],
        ]);
    }
}
