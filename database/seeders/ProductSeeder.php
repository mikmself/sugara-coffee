<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'id' => 'e5a2100c-4258-4733-b5c0-9a94948f6433',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Arabica',
            'description' => 'Kopi Arabica',
            'price' => 39000,
            'stock' => 50,
            'image' => 'arabica.png'
        ]);
        Product::create([
            'id' => 'ed29ef55-879c-44df-90ef-3f269989dafc',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Robusta',
            'description' => 'Kopi Robusta',
            'price' => 39000,
            'stock' => 50,
            'image' => 'robusta.png'
        ]);
        Product::create([
            'id' => '6f71bcf8-5b3f-41b1-a4be-0c363924fca4',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Liberika',
            'description' => 'Kopi Liberika',
            'price' => 39000,
            'stock' => 50,
            'image' => 'liberika.png'
        ]);
        Product::create([
            'id' => 'da5c2427-c074-4bcc-833a-ab21d35a8893',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Brown Sugar',
            'description' => 'Kopi Brown Sugar',
            'price' => 39000,
            'stock' => 50,
            'image' => 'brown-sugar.png'
        ]);


        Product::create([
            'id' => '0d4f9b14-eaf2-4dab-8ba8-267689fc7d70',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Nasi Goreng',
            'description' => 'Makanan Nasi Goreng',
            'price' => 30000,
            'stock' => 50,
            'image' => 'nasi-goreng.jpeg'
        ]);
        Product::create([
            'id' => '7c13842e-c4e3-4f15-9d58-4614cbce8a61',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Pisang Goreng',
            'description' => 'Makanan Pisang Goreng',
            'price' => 11000,
            'stock' => 50,
            'image' => 'pisang-goreng.jpeg'
        ]);
        Product::create([
            'id' => 'b7ce082b-be92-42c2-8dfe-5ae2355c8f31',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Ayam Bakar',
            'description' => 'Makanan Ayam Bakar',
            'price' => 25000,
            'stock' => 50,
            'image' => 'ayam-bakar.jpg'
        ]);
        Product::create([
            'id' => 'c9b0a8d6-5779-43e0-85ae-16a77157dacd',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Sosis Bakar',
            'description' => 'Makanan Sosis Bakar',
            'price' => 11000,
            'stock' => 50,
            'image' => 'sosis-bakar.jpg'
        ]);


        Product::create([
            'id' => '7c6600f5-5640-43c1-ba6a-bc55e41f5724',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Es Jeruk',
            'description' => 'Minuman Es Jeruk',
            'price' => 12000,
            'stock' => 50,
            'image' => 'es-jeruk.png'
        ]);
        Product::create([
            'id' => 'bd14566b-6352-470d-935f-19d89e3612f0',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Es Teh',
            'description' => 'Minuman Es Teh',
            'price' => 9000,
            'stock' => 50,
            'image' => 'es-teh.jpg'
        ]);
        Product::create([
            'id' => '216671f4-27b7-4b90-bcac-5c33b53221a3',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Es Kopi',
            'description' => 'Minuman Es Kopi',
            'price' => 17000,
            'stock' => 50,
            'image' => 'es-kopi.jpg'
        ]);
        Product::create([
            'id' => 'a07bab1a-fe94-41d8-a6ee-051dc4fcccad',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Mangga',
            'description' => 'Minuman Jus Mangga',
            'price' => 14000,
            'stock' => 50,
            'image' => 'jus-mangga.jpg'
        ]);
    }
}
