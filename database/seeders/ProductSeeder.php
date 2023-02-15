<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1000,
                'is_selling' => 1,
                'sort_order' => 11,
                'shop_id' => 1,
                'secondary_category_id' => 1,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1800,
                'is_selling' => 1,
                'sort_order' => 18,
                'shop_id' => 1,
                'secondary_category_id' => 3,
                'image1' => 2,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 2000,
                'is_selling' => 1,
                'sort_order' => 21,
                'shop_id' => 1,
                'secondary_category_id' => 2,
                'image1' => 3,
                'image2' => 2,
                'image3' => 1,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1980,
                'is_selling' => 1,
                'sort_order' => 51,
                'shop_id' => 1,
                'secondary_category_id' => 5,
                'image1' => 4,
                'image2' => 2,
                'image3' => 3,
                'image4' => 1,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 3050,
                'is_selling' => 1,
                'sort_order' => 4,
                'shop_id' => 1,
                'secondary_category_id' => 4,
                'image1' => 5,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 6000,
                'is_selling' => 1,
                'sort_order' => 10,
                'shop_id' => 1,
                'secondary_category_id' => 6,
                'image1' => 6,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 980,
                'is_selling' => 1,
                'sort_order' => 74,
                'shop_id' => 1,
                'secondary_category_id' => 8,
                'image1' => 3,
                'image2' => 2,
                'image3' => 1,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 2980,
                'is_selling' => 1,
                'sort_order' => 82,
                'shop_id' => 1,
                'secondary_category_id' => 7,
                'image1' => 4,
                'image2' => 2,
                'image3' => 3,
                'image4' => 1,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1100,
                'is_selling' => 1,
                'sort_order' => 17,
                'shop_id' => 1,
                'secondary_category_id' => 3,
                'image1' => 5,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 4400,
                'is_selling' => 1,
                'sort_order' => 22,
                'shop_id' => 1,
                'secondary_category_id' => 9,
                'image1' => 6,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1000,
                'is_selling' => 1,
                'sort_order' => 65,
                'shop_id' => 1,
                'secondary_category_id' => 6,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 9870,
                'is_selling' => 1,
                'sort_order' => 9,
                'shop_id' => 1,
                'secondary_category_id' => 7,
                'image1' => 2,
                'image2' => 6,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1100,
                'is_selling' => 1,
                'sort_order' => 35,
                'shop_id' => 1,
                'secondary_category_id' => 4,
                'image1' => 3,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 12000,
                'is_selling' => 1,
                'sort_order' => 47,
                'shop_id' => 1,
                'secondary_category_id' => 5,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 7600,
                'is_selling' => 1,
                'sort_order' => 49,
                'shop_id' => 1,
                'secondary_category_id' => 3,
                'image1' => 5,
                'image2' => 2,
                'image3' => 4,
                'image4' => 3,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1080,
                'is_selling' => 1,
                'sort_order' => 10,
                'shop_id' => 1,
                'secondary_category_id' => 1,
                'image1' => 5,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 2980,
                'is_selling' => 1,
                'sort_order' => 2,
                'shop_id' => 1,
                'secondary_category_id' => 8,
                'image1' => 4,
                'image2' => 2,
                'image3' => 3,
                'image4' => 1,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1100,
                'is_selling' => 1,
                'sort_order' => 48,
                'shop_id' => 1,
                'secondary_category_id' => 9,
                'image1' => 2,
                'image2' => 3,
                'image3' => 5,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 8700,
                'is_selling' => 1,
                'sort_order' => 20,
                'shop_id' => 1,
                'secondary_category_id' => 7,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1500,
                'is_selling' => 1,
                'sort_order' => 30,
                'shop_id' => 1,
                'secondary_category_id' => 5,
                'image1' => 5,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 3800,
                'is_selling' => 1,
                'sort_order' => 4,
                'shop_id' => 1,
                'secondary_category_id' => 4,
                'image1' => 2,
                'image2' => 6,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 9870,
                'is_selling' => 1,
                'sort_order' => 3,
                'shop_id' => 1,
                'secondary_category_id' => 2,
                'image1' => 3,
                'image2' => 2,
                'image3' => 6,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1000,
                'is_selling' => 1,
                'sort_order' => 5,
                'shop_id' => 1,
                'secondary_category_id' => 1,
                'image1' => 6,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 3300,
                'is_selling' => 1,
                'sort_order' => 36,
                'shop_id' => 1,
                'secondary_category_id' => 2,
                'image1' => 2,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 6500,
                'is_selling' => 1,
                'sort_order' => 70,
                'shop_id' => 1,
                'secondary_category_id' => 1,
                'image1' => 5,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1200,
                'is_selling' => 1,
                'sort_order' => 8,
                'shop_id' => 1,
                'secondary_category_id' => 4,
                'image1' => 4,
                'image2' => 2,
                'image3' => 3,
                'image4' => 1,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 28700,
                'is_selling' => 1,
                'sort_order' => 17,
                'shop_id' => 1,
                'secondary_category_id' => 6,
                'image1' => 4,
                'image2' => 2,
                'image3' => 1,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 11000,
                'is_selling' => 1,
                'sort_order' => 80,
                'shop_id' => 1,
                'secondary_category_id' => 7,
                'image1' => 2,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 8600,
                'is_selling' => 1,
                'sort_order' => 81,
                'shop_id' => 1,
                'secondary_category_id' => 5,
                'image1' => 6,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 6300,
                'is_selling' => 1,
                'sort_order' => 32,
                'shop_id' => 1,
                'secondary_category_id' => 2,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 8740,
                'is_selling' => 1,
                'sort_order' => 71,
                'shop_id' => 1,
                'secondary_category_id' => 9,
                'image1' => 6,
                'image2' => 1,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 9200,
                'is_selling' => 1,
                'sort_order' => 99,
                'shop_id' => 1,
                'secondary_category_id' => 8,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 10200,
                'is_selling' => 1,
                'sort_order' => 6,
                'shop_id' => 1,
                'secondary_category_id' => 9,
                'image1' => 6,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1980,
                'is_selling' => 1,
                'sort_order' => 98,
                'shop_id' => 1,
                'secondary_category_id' => 3,
                'image1' => 3,
                'image2' => 2,
                'image3' => 1,
                'image4' => 4,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 7400,
                'is_selling' => 1,
                'sort_order' => 77,
                'shop_id' => 1,
                'secondary_category_id' => 6,
                'image1' => 4,
                'image2' => 2,
                'image3' => 3,
                'image4' => 1,
            ],
            [
                'name' => '商品名',
                'information' => '商品情報です テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'price' => 1100,
                'is_selling' => 1,
                'sort_order' => 88,
                'shop_id' => 1,
                'secondary_category_id' => 8,
                'image1' => 1,
                'image2' => 2,
                'image3' => 3,
                'image4' => 4,
            ],
        ]);
    }
}
