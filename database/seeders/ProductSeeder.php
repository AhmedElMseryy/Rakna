<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            //----------------------------------------------------SERVICES
            [
                'name' => 'Car Washing',
                'price' => 80,
                'image' => 'computer.webp',
                'status' => 0,
            ],
            [
                'name' => 'Change Oil',
                'price' => 110,
                'image' => 'oill.webp',
                'status' => 0,
            ],
            [
                'name' => 'Maintenance',
                'price' => 460,
                'image' => 'maintenance.webp',
                'status' => 0,
            ],
            [
                'name' => 'Computer Check',
                'price' => 200,
                'image' => 'computer.webp',
                'status' => 0,
            ],
            //----------------------------------------------------SPARE PARTS
            [
                'name' => 'فانوس خلفى',
                'price' => 1800,
                'image' => 'prod2.png',
                'status' => 1,
            ],
            [
                'name' => 'طقم مرايات يبانى',
                'price' => 2100,
                'image' => 'prod1.png',
                'status' => 1,
            ],
            [
                'name' => 'أكره فتح خارجيه',
                'price' => 1600,
                'image' => 'prod3.png',
                'status' => 1,
            ],
            [
                'name' => 'فلتر زيت بورش',
                'price' => 850,
                'image' => 'prod4.png',
                'status' => 1,
            ],
            //------------------------------------------------------
            [
                'name' => 'سير كاتينه',
                'price' => 415,
                'image' => 'prod5.jpeg',
                'status' => 2,
            ],
            [
                'name' => 'سير دينامو',
                'price' => 840,
                'image' => 'prod6.jpeg',
                'status' => 2,
            ],
            [
                'name' => 'مروحه بلاور',
                'price' => 3475,
                'image' => 'prod7.png',
                'status' => 2,
            ],
            [
                'name' => 'مبرد زيت',
                'price' => 900,
                'image' => 'prod8.jpeg',
                'status' => 2,
            ],
            //----------------------------------------------------PARTITIONS
            [
                'name' => 'Partition 1',
                'price' => 90,
                'image' => 'image 5.png',
                'status' => 3,
                'mqtt' => 0,
            ],
            [
                'name' => 'Partition 2',
                'price' => 90,
                'image' => 'part 3.png',
                'status' => 3,
                'mqtt' => 0,
            ],
            [
                'name' => 'Partition 3',
                'price' => 90,
                'image' => 'part 4.png',
                'status' => 3,
                'mqtt' => 1,
            ],
            [
                'name' => 'Partition 4',
                'price' => 90,
                'image' => 'part 4.png',
                'status' => 3,
                'mqtt' => 0,
            ],
            [
                'name' => 'Partition 5',
                'price' => 90,
                'image' => 'image 5.png',
                'status' => 3,
                'mqtt' => 1,
            ],


        ];

        // Insert data into the database
        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
