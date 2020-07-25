<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->truncate();
        DB::table('subcategories')->insert(array (
            0 =>
                [
                    'id' => 1,
                    'category_id' => 1,
                    'name' => 'Dresses',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            1 =>
                [
                    'id' => 2,
                    'category_id' => 1,
                    'name' => 'Jackets & Coats',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            2 =>
                [
                    'id' => 3,
                    'category_id' => 1,
                    'name' => 'Tops & Tees',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            3 =>
                [
                    'id' => 4,
                    'category_id' => 1,
                    'name' => 'Jeans',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            4 =>
                [
                    'id' => 5,
                    'category_id' => 2,
                    'name' => 'Women\'s Shoes',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            5 =>
                [
                    'id' => 6,
                    'category_id' => 2,
                    'name' => 'Men\'s Casual Shoes',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            6 =>
                [
                    'id' => 7,
                    'category_id' => 2,
                    'name' => 'Women\'s Flats',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            7 =>
                [
                    'id' => 8,
                    'category_id' => 3,
                    'name' => 'Sports Clothing',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            8 =>
                [
                    'id' => 9,
                    'category_id' => 3,
                    'name' => 'Swimming',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            9 =>
                [
                    'id' => 10,
                    'category_id' => 3,
                    'name' => 'Camping & Hiking',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            10 =>
                [
                    'id' => 11,
                    'category_id' => 3,
                    'name' => 'Hunting',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            11 =>
                [
                    'id' => 12,
                    'category_id' => 4,
                    'name' => 'Men\'s Watches',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            12 =>
                [
                    'id' => 13,
                    'category_id' => 4,
                    'name' => 'Women\'s Watches',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            13 =>
                [
                    'id' => 14,
                    'category_id' => 4,
                    'name' => 'Watch Accessories',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            14 =>
                [
                    'id' => 15,
                    'category_id' => 5,
                    'name' => 'Coffee',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            15 =>
                [
                    'id' => 16,
                    'category_id' => 5,
                    'name' => 'Grocery',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            16 =>
                [
                    'id' => 17,
                    'category_id' => 5,
                    'name' => 'Meat',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            17 =>
                [
                    'id' => 18,
                    'category_id' => 6,
                    'name' => 'Cellphones',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            18 =>
                [
                    'id' => 19,
                    'category_id' => 6,
                    'name' => 'Mobile Phone Parts',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            19 =>
                [
                    'id' => 20,
                    'category_id' => 6,
                    'name' => 'Phone Bags & Cases',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            20 =>
                [
                    'id' => 21,
                    'category_id' => 7,
                    'name' => 'Office Electronics',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            21 =>
                [
                    'id' => 22,
                    'category_id' => 7,
                    'name' => 'Tablet Accessories',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            22 =>
                [
                    'id' => 23,
                    'category_id' => 7,
                    'name' => 'Mini PC',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            23 =>
                [
                    'id' => 24,
                    'category_id' => 7,
                    'name' => 'Laptop Parts',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
        ));
    }
}
