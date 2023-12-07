<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MediaSeeder::class,
            EventSeeder::class,
            UserSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            EmployeeSeeder::class,
            PostSeeder::class,
            PaymentSeeder::class
        ]);
    }
}
