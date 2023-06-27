<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Anime',
            'slug' => 'anime',
            'deskripsi' => 'Jelajahi dunia anime dengan Kategori Kostum Tema Anime kami di Kawaiirent!',
        ]);
        
        Kategori::create([
            'nama_kategori' => 'Superhero',
            'slug' => 'superhero',
            'deskripsi' => 'Dalam dunia Kategori Kostum Tema Superhero di Kawaiirent, Anda dapat mengambil peran sebagai pahlawan super yang luar biasa!',
        ]);
        
        Kategori::create([
            'nama_kategori' => 'Fantasy',
            'slug' => 'fantasy',
            'deskripsi' => 'Dalam Kategori Kostum Tema Fantasi di Kawaiirent, Anda akan menemukan pintu masuk ke dunia ajaib yang penuh dengan keajaiban dan misteri!',
        ]);

        Kategori::create([
            'nama_kategori' => 'Game',
            'slug' => 'game',
            'deskripsi' => 'Dalam Kategori Kostum Tema Game di Kawaiirent, Anda dapat memasuki dunia yang terinspirasi dari permainan video yang penuh dengan aksi dan petualangan!',
        ]);
    }
}
