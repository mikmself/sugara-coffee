<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'id' => Str::uuid(),
            'id_creator' => '96d55693-cd5a-4704-824d-d6b124122a06',
            'title' => 'Aritkel Pertama',
            'content' => "<h1><span style=\"background-color: #bfedd2;\">Ini Adalah</span> <span style=\"background-color: #fbeeb8;\">Artikel Pertama</span></h1><h2><span style=\"background-color: #f8cac6;\">Dari Website Kami</span></h2> <h3><span style=\"background-color: #e67e23;\">Jadi </span><span style=\"background-color: #e03e2d;\">Mohon Maaf</span></h3><h4><span style=\"background-color: #2dc26b;\">Apabila</span><span style=\"background-color: #236fa1;\"><span style=\"background-color: #2dc26b;\"></span>Banyak Kesalahan</span></h4>" ,
            'image' => 'artikel.png'
        ]);
    }
}
