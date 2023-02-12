<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'トップス',
                'sort_order' => 1,
            ],
            [
                'name' => 'ボトムス',
                'sort_order' => 2,
            ],
            [
                'name' => '小物・その他',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'Tシャツ',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'セーター',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ジャケット',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'デニム',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'スカート',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ワンピース',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            [
                'name' => '帽子',
                'sort_order' => 6,
                'primary_category_id' => 3
            ],
            [
                'name' => '靴',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],
            [
                'name' => 'バッグ',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],
        ]);
    }
}
