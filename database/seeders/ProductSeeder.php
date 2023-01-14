<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                 'name' => 'Lenovo Thnikpad T490',
                 'details' => 'Quality Lenovo Thinkpad, 16 GB , 64 bits, Windows OS, 512 GB SSD',
                 'description' => 'Built for serious business professionals, the 14" ThinkPad T490 Laptop from Lenovo is powered by a 1.8 GHz Intel Core i7-8565U Quad-Core processor which allows you to run multiple applications simultaneously. If you need more power, the system can be overclocked to 4.6 GHz using Intel Turbo Boost 2.0 technology',
                 'brand' => 'Lenovo',
                 'price' => 5000,
                 'shipping_cost' => 50,
                 'image_path' => 'storage/product.png'
            ],

            [
                'name' => 'Dell Workstation',
                'details' => 'Dell Workstation, 32 GB , 64 bits, Windows OS, 1 T SSD',
                'description' => 'Power CPU and GPU intensive applications with enterprise-grade components including up to Intel 55W processors, professional NVIDIA graphics and advanced thermal designs keep your system cool, quiet and running at peak performanc',
                'brand' => 'Dell',
                'price' => 10000,
                'shipping_cost' => 100,
                'image_path' => 'storage/product2.png'
           ]
        ];

        foreach($products as $key => $value){
            Product::create($value); // to create the values in the database
        }
    }
}
