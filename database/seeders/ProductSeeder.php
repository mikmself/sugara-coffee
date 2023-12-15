<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Kopi
        Product::create([
            'id' => '3e041f56-85a5-4a2e-8b6c-7d6fb4f9a1a1',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Arabica',
            'description' => 'Kopi Arabica',
            'price' => 39000,
            'stock' => 100,
            'image' => 'kopi-arabica.png'
        ]);
        Product::create([
            'id' => '9d2c8b7a-efb1-45d8-b0e2-634c71f8b39d',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Organic Brown Sugar',
            'description' => 'Kopi Organic Brown Sugar',
            'price' => 41000,
            'stock' => 100,
            'image' => 'kopi-brown-sugar.png'
        ]);
        Product::create([
            'id' => 'c6f0809d-2df1-4db9-93e6-1f74b93e1d6a',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'House Bland (Arabica)',
            'description' => 'Kopi House Bland (Arabica)',
            'price' => 58000,
            'stock' => 100,
            'image' => 'kopi-house-bland.png'
        ]);
        Product::create([
            'id' => 'a14e9bd6-7fbf-4c9b-8db1-ff1f8e0a8e29',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Liberika',
            'description' => 'Kopi Liberika',
            'price' => 39000,
            'stock' => 100,
            'image' => 'kopi-liberika.png'
        ]);
        Product::create([
            'id' => 'b083c65e-6f1f-497d-bc2b-4b9832b77fd8',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Liberika Honey',
            'description' => 'Kopi Liberika Honey',
            'price' => 31500,
            'stock' => 100,
            'image' => 'kopi-liberika-honey.png'
        ]);
        Product::create([
            'id' => '74eae426-8bfc-4a4a-86fe-15f7a3d3b22a',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Liberika Natural',
            'description' => 'Kopi Liberika Natural',
            'price' => 23000,
            'stock' => 100,
            'image' => 'kopi-liberika-natural.png'
        ]);
        Product::create([
            'id' => 'e18aebcd-6e24-4d86-b2f5-c5ab9bd25c5b',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Liberika Peny Arang',
            'description' => 'Kopi Liberika Peny Arang',
            'price' => 25000,
            'stock' => 100,
            'image' => 'kopi-liberika-peny.png'
        ]);
        Product::create([
            'id' => '159fc231-5494-40a7-a2cf-9a881f47d1c3',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Organic Brown',
            'description' => 'Kopi Organic Brown',
            'price' => 39000,
            'stock' => 100,
            'image' => 'kopi-organic-brown.png'
        ]);
        Product::create([
            'id' => '2bbfe7b2-1c94-4f88-87e8-608e7c823eb9',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Robusta',
            'description' => 'Kopi Robusta',
            'price' => 39000,
            'stock' => 100,
            'image' => 'kopi-robusta.png'
        ]);
        Product::create([
            'id' => 'd8ff7a62-201b-4f03-87c5-14fbb20b3a35',
            'id_category' => '684db18c-e073-4256-8166-7fedbf752241',
            'name' => 'Sugara Bubuk',
            'description' => 'Kopi Sugara Bubuk',
            'price' => 39000,
            'stock' => 100,
            'image' => 'kopi-sugara-bubuk.png'
        ]);


        // Makanan
        Product::create([
            'id' => '6d35f8a4-96fe-42c8-bc0a-45efc1f54382',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Ayam Kampung Bakar',
            'description' => 'Makanan Ayam Kampung Bakar',
            'price' => 25000,
            'stock' => 100,
            'image' => 'makanan-ayam-bakar.png'
        ]);
        Product::create([
            'id' => 'a9d3a125-42c9-4b69-8659-6f4cc6148619',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Cah Kangkung',
            'description' => 'Makanan Cah Kangkung',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-cah-kangung.png'
        ]);
        Product::create([
            'id' => '7aef7812-84d1-4a08-aa8f-2d6c1d6b9c8c',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Cak Genjer',
            'description' => 'Makanan Cak Genjer',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-cak-genjer.png'
        ]);
        Product::create([
            'id' => '8aeb91a5-7f3d-4fb1-97b5-8cb55f16f4b7',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Karedok',
            'description' => 'Makanan Karedok',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-karedok.png'
        ]);
        Product::create([
            'id' => 'f4ec3db2-01f2-4e06-a259-3f4a735a2b8e',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Nasi Goreng (Kencur + Ayam)',
            'description' => 'Makanan Nasi Goreng (Kencur + Ayam)',
            'price' => 30500,
            'stock' => 100,
            'image' => 'makanan-nasi-goreng.png'
        ]);
        Product::create([
            'id' => '85f22a76-5e6a-4dcb-a370-df0b8c93cc01',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Nasi Putih',
            'description' => 'Makanan Nasi Putih',
            'price' => 5500,
            'stock' => 100,
            'image' => 'makanan-nasi-putih.png'
        ]);
        Product::create([
            'id' => '60b4eef1-3be2-4d8c-a58a-57b7d0d2c2ac',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Pecak Kecambah',
            'description' => 'Makanan Pecak Kecambah',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-pecak-kecambah.png'
        ]);
        Product::create([
            'id' => 'd705f1e9-7315-47b4-b2c3-1be4b8d53572',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Pecak Timun',
            'description' => 'Makanan Pecak Timun',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-pecak-timun.png'
        ]);
        Product::create([
            'id' => '4da5a2f2-4f4f-45a2-aeff-8b9a4f2f1c6f',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Sate Kambing',
            'description' => 'Makanan Sate Kambing',
            'price' => 30500,
            'stock' => 100,
            'image' => 'makanan-sate-kambing.png'
        ]);
        Product::create([
            'id' => '26db8d56-b44a-4785-8a05-77b98b2d4f7d',
            'id_category' => 'c5e8186b-bc2a-46ec-a5d8-35bad66c9220',
            'name' => 'Tumis Pakis',
            'description' => 'Makanan Tumis Pakis',
            'price' => 11000,
            'stock' => 100,
            'image' => 'makanan-tumis-pakis.png'
        ]);

        // Minuman
        Product::create([
            'id' => '684f6c8e-4511-4a8c-8d72-1d84679c284f',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Air Mineral',
            'description' => 'Minuman Air Mineral',
            'price' => 2500,
            'stock' => 100,
            'image' => 'minuman-air-mineral.png'
        ]);
        Product::create([
            'id' => 'a2d92b68-2f10-4c8b-b50d-57f9f74c94d4',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jeruk Panas',
            'description' => 'Minuman Jeruk Panas',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jeruk-panas.png'
        ]);
        Product::create([
            'id' => '9cd611dd-b399-462b-b155-b0eb2ea31c7a',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Alpukat',
            'description' => 'Minuman Jus Alpukat',
            'price' => 11500,
            'stock' => 100,
            'image' => 'minuman-jus-alpokat.png'
        ]);
        Product::create([
            'id' => 'f44cf090-7889-4f78-85d2-c0e3901f90f3',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Jambu',
            'description' => 'Minuman Jus Jambu',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-jambu.png'
        ]);
        Product::create([
            'id' => 'e33e5795-5bb1-4952-b9eb-dbf8fe6181a8',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Mangga',
            'description' => 'Minuman Jus Mangga',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-mangga.png'
        ]);
        Product::create([
            'id' => '109fbd18-540e-4f78-af90-bf6c9566e305',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Melon',
            'description' => 'Minuman Jus Melon',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-melon.png'
        ]);
        Product::create([
            'id' => 'bbea870f-13e9-46c3-8bfa-3c66ef380a7c',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Naga',
            'description' => 'Minuman Jus Naga',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-naga.png'
        ]);
        Product::create([
            'id' => 'd4a16aa8-9a45-4d66-aa3d-3d246cb623c3',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Semangka',
            'description' => 'Minuman Jus Semangka',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-semangka.png'
        ]);
        Product::create([
            'id' => '8e3992e3-af07-4920-9fb6-2d7a35719e62',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Strawberry',
            'description' => 'Minuman Jus Strawberry',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-strawberry.png'
        ]);
        Product::create([
            'id' => 'c5a2e4e9-8101-4ae9-99ac-67e303f997a4',
            'id_category' => 'e8804dfd-41d6-46a2-8c63-851dae7e717c',
            'name' => 'Jus Tomat',
            'description' => 'Minuman Jus Tomat',
            'price' => 11000,
            'stock' => 100,
            'image' => 'minuman-jus-tomat.png'
        ]);
    }
}
