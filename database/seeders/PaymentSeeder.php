<?php

namespace Database\Seeders;

use App\Models\TypeOfPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Cash',
            'number' => 'Tunai'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Gopay',
            'number' => '081298726738'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Dana',
            'number' => '081298726738'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Ovo',
            'number' => '081298726738'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Flip',
            'number' => '081298726738'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'Mandiri',
            'number' => '809786543576878'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'BCA',
            'number' => '896654467343555'
        ]);
        TypeOfPayment::create([
            'id' => Str::uuid(),
            'name' => 'BRI',
            'number' => '956632446687586'
        ]);
    }
}
