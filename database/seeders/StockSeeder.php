<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_stocks')->insert([
            [
                'product_id' => 1,
                'type' => 1,
                'quantity' => 5,
            ],
            [
                'product_id' => 2,
                'type' => 1,
                'quantity' => 100,
            ],
            [
                'product_id' => 3,
                'type' => 1,
                'quantity' => 39,
            ],
            [
                'product_id' => 4,
                'type' => 1,
                'quantity' => 309,
            ],
            [
                'product_id' => 5,
                'type' => 1,
                'quantity' => 27,
            ],
            [
                'product_id' => 6,
                'type' => 1,
                'quantity' => 99,
            ],
            [
                'product_id' => 7,
                'type' => 1,
                'quantity' => 109,
            ],
            [
                'product_id' => 8,
                'type' => 1,
                'quantity' => 2,
            ],
            [
                'product_id' => 9,
                'type' => 1,
                'quantity' => 38,
            ],
            [
                'product_id' => 10,
                'type' => 1,
                'quantity' => 46,
            ],
            [
                'product_id' => 11,
                'type' => 1,
                'quantity' => 3,
            ],
            [
                'product_id' => 12,
                'type' => 1,
                'quantity' => 72,
            ],
            [
                'product_id' => 13,
                'type' => 1,
                'quantity' => 93,
            ],
            [
                'product_id' => 14,
                'type' => 1,
                'quantity' => 387,
            ],
            [
                'product_id' => 15,
                'type' => 1,
                'quantity' => 38,
            ],
            [
                'product_id' => 16,
                'type' => 1,
                'quantity' => 40,
            ],
            [
                'product_id' => 17,
                'type' => 1,
                'quantity' => 46,
            ],
            [
                'product_id' => 18,
                'type' => 1,
                'quantity' => 83,
            ],
            [
                'product_id' => 19,
                'type' => 1,
                'quantity' => 19,
            ],
            [
                'product_id' => 20,
                'type' => 1,
                'quantity' => 330,
            ],
            [
                'product_id' => 21,
                'type' => 1,
                'quantity' => 76,
            ],
            [
                'product_id' => 22,
                'type' => 1,
                'quantity' => 87,
            ],
            [
                'product_id' => 23,
                'type' => 1,
                'quantity' => 29,
            ],
            [
                'product_id' => 24,
                'type' => 1,
                'quantity' => 19,
            ],
            [
                'product_id' => 25,
                'type' => 1,
                'quantity' => 33,
            ],
            [
                'product_id' => 26,
                'type' => 1,
                'quantity' => 12,
            ],
            [
                'product_id' => 27,
                'type' => 1,
                'quantity' => 4,
            ],
            [
                'product_id' => 28,
                'type' => 1,
                'quantity' => 378,
            ],
            [
                'product_id' => 29,
                'type' => 1,
                'quantity' => 3,
            ],
            [
                'product_id' => 30,
                'type' => 1,
                'quantity' => 47,
            ],
            [
                'product_id' => 31,
                'type' => 1,
                'quantity' => 87,
            ],
            [
                'product_id' => 32,
                'type' => 1,
                'quantity' => 100,
            ],
            [
                'product_id' => 33,
                'type' => 1,
                'quantity' => 72,
            ],
            [
                'product_id' => 34,
                'type' => 1,
                'quantity' => 87,
            ],
            [
                'product_id' => 35,
                'type' => 1,
                'quantity' => 22,
            ],
            [
                'product_id' => 36,
                'type' => 1,
                'quantity' => 65,
            ],
            
        ]);
    }
}
