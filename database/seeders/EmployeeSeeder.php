<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Suparjo Kusumo',
            'email' => 'suparjo@gmail.com',
            'telephone' => '081228765637',
            'address' => 'Sokaraja RT 10 RW 5',
            'type_of_employee' => 'Kurir'
        ]);
        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Indra Wijaya',
            'email' => 'indrawjy@gmail.com',
            'telephone' => '082354344435',
            'address' => 'Dukuwaluh RT 11 RW 9',
            'type_of_employee' => 'Kurir'
        ]);

        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Pradi Kurniawan',
            'email' => 'pardik@gmail.com',
            'telephone' => '086758723452',
            'address' => 'Pasir Wetan RT 6 RW 2',
            'type_of_employee' => 'Kasir'
        ]);
        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Heru Wijayanto',
            'email' => 'herujyt@gmail.com',
            'telephone' => '082353345645',
            'address' => 'Kebangan RT 21 RW 3',
            'type_of_employee' => 'Kasir'
        ]);

        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Sutoro Sudiro',
            'email' => 'sudiro@gmail.com',
            'telephone' => '084345344654',
            'address' => 'Sumbang RT 15 RW 6',
            'type_of_employee' => 'Pengemas'
        ]);
        Employee::create([
            'id' => Str::uuid(),
            'name' => 'Amar Galuh Panuluh',
            'email' => 'amargp@gmail.com',
            'telephone' => '084643567423',
            'address' => 'Cilongok RT 3 RW 9',
            'type_of_employee' => 'Pengemas'
        ]);
    }
}
