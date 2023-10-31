<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductCategory::create([
            'id' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Produk Kopi',
            'description' => 'Berbagai macam produk dari kopi baik barang baku maupun barang jadi'
        ]);
        ProductCategory::create([
            'id' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Makanan',
            'description' => 'Berbagai macam produk makanan dari sugara coffee'
        ]);
        ProductCategory::create([
            'id' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Minuman',
            'description' => 'Berbagai macam produk minuman dari sugara coffee'
        ]);
    }
}
