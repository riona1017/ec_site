<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => '店名',
                'information' => 'お店の情報 テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト',
                'filename' => '',
                'is_selling' => true
            ],
            [
                'owner_id' => 2,
                'name' => '店名',
                'information' => 'お店の情報 テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト テキスト',
                'filename' => '',
                'is_selling' => true
            ],
        ]);
    }
}
