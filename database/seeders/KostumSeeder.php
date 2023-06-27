<?php

namespace Database\Seeders;

use App\Models\Kostum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KostumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kostum::create([
            'nama_kostum' => 'Asuna SAO',
            'slug' => 'asuna-sao',
            'deskripsi' => 'Asuna adalah salah satu karakter protagonis di anime Sword Art Online',
            'harga_sewa' => 150000,
            'stok' => 9,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Batman',
            'slug' => 'batman',
            'deskripsi' => 'Batman adalah salah satu karakter super hero yang paling terkenal dari DC Universe.',
            'harga_sewa' => 240000,
            'stok' => 7,
            'id_kategori' => 2,
        ]);

        Kostum::create([
            'nama_kostum' => 'Bumblebee',
            'slug' => 'bumblebee',
            'deskripsi' => 'Bumblebee adalah salah satu karakter paling terkenal di serial film Transformer.',
            'harga_sewa' => 200000,
            'stok' => 7,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Cinderella',
            'slug' => 'cinderella',
            'deskripsi' => 'Cinderella adalah karakter utama dari dongeng Cinderella.',
            'harga_sewa' => 200000,
            'stok' => 7,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Dio Brando',
            'slug' => 'dio-brando',
            'deskripsi' => 'Dio adalah antagonis utama dari beberapa part anime dan manga Jojo Bizzare Adventure.',
            'harga_sewa' => 200000,
            'stok' => 9,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Gandalf LOTR',
            'slug' => 'gandalf-lotr',
            'deskripsi' => 'Gandalf adalah salah satu karakter paling terkenal dari seri novel dan film Lord of the Ring.',
            'harga_sewa' => 150000,
            'stok' => 9,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Geralt The Witcher',
            'slug' => 'geralt-the-witcher',
            'deskripsi' => 'Geralt merupakan karakter protagonis utama dalam serial game The Witcher.',
            'harga_sewa' => 250000,
            'stok' => 6,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Gojo Satoru',
            'slug' => 'gojo-satoru',
            'deskripsi' => 'Salah satu karakter paling terkenal dari anime dan manga Jujutsu Kaisen',
            'harga_sewa' => 150000,
            'stok' => 9,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Harley Quinn',
            'slug' => 'harley-quinn',
            'deskripsi' => 'Harley Quinn adalah salah satu villain yang paling terkenal dari DC Universe.',
            'harga_sewa' => 150000,
            'stok' => 8,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Harry Potter',
            'slug' => 'harry-potter',
            'deskripsi' => 'Harry Potter adalah tokoh utama dari serial novel dan film Harry Potter.',
            'harga_sewa' => 200000,
            'stok' => 9,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Herta HSR',
            'slug' => 'herta-hsr',
            'deskripsi' => 'Herta adalah salah satu karakter playable paling terkenal di seri game Honkai Star Rail.',
            'harga_sewa' => 200000,
            'stok' => 6,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Ironman',
            'slug' => 'ironman',
            'deskripsi' => 'Ironman adalah salah satu super hero dari Marvel Cinematic Universe yang paling terkenal.',
            'harga_sewa' => 400000,
            'stok' => 3,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Jack Sparrow',
            'slug' => 'jack-sparrow',
            'deskripsi' => 'Jack Sparrow adalah tokoh utama dari serial film Pirates of the Caribbean.',
            'harga_sewa' => 200000,
            'stok' => 5,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Kamen Rider Black',
            'slug' => 'kamen-rider-black',
            'deskripsi' => 'Kamen Rider Black merupakan salah satu bentuk perubahan tokoh utama dalam serial tokusatsu dan game Kamen Rider Black.',
            'harga_sewa' => 500000,
            'stok' => 2,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Kaedehara Kazuha',
            'slug' => 'kaedehara-kazuha',
            'deskripsi' => 'Kazuha merupakan salah satu karakter yang bisa dimainkan di game Genshin Impact.',
            'harga_sewa' => 200000,
            'stok' => 6,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Kujo Jotaro',
            'slug' => 'kujo-jotaro',
            'deskripsi' => 'Kujo Jotaro adalah karakter utama dari manga dan anime Jojo Bizzare Adventure: Stardust Crusaders.',
            'harga_sewa' => 250000,
            'stok' => 4,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Link LOZ',
            'slug' => 'link-loz',
            'deskripsi' => 'Link adalah protagonis utama dalam game the Legend of Zelda.',
            'harga_sewa' => 150000,
            'stok' => 9,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Makima CSM',
            'slug' => 'makima-csm',
            'deskripsi' => 'Makima adalah salah satu antagonis utama di manga dan anime Chainsaw Man.',
            'harga_sewa' => 120000,
            'stok' => 6,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Maleficient',
            'slug' => 'maleficient',
            'deskripsi' => 'Maleficent adalah tokoh antagonis utama dari cerita dongeng Sleeping Beauty.',
            'harga_sewa' => 220000,
            'stok' => 6,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Uzumaki Naruto',
            'slug' => 'uzumaki-naruto',
            'deskripsi' => 'Tokoh utama anime dan manga bertema shinobi dengan judul Naruto.',
            'harga_sewa' => 120000,
            'stok' => 8,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Ningguang',
            'slug' => 'ningguang',
            'deskripsi' => 'Ningguang adalah salah satu karakter yang bisa dimainkan di game Genshin Impact.',
            'harga_sewa' => 140000,
            'stok' => 7,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Squid Game Guard',
            'slug' => 'squid-game-guard',
            'deskripsi' => 'Penjaga Squidgame adalah seragam ikonik yang digunakan oleh para penjaga dari serial Squid Game.',
            'harga_sewa' => 150000,
            'stok' => 9,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Raiden Shogun',
            'slug' => 'raiden-shogun',
            'deskripsi' => 'Raiden merupakan salah satu karakter yang dapat dimainkan pada game Genshin Impact.',
            'harga_sewa' => 170000,
            'stok' => 6,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Uchiha Sasuke',
            'slug' => 'uchiha-sasuke',
            'deskripsi' => 'Sahabat dan rival terdekat Naruto di manga dan anime Naruto.',
            'harga_sewa' => 130000,
            'stok' => 4,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Scarlet Witch',
            'slug' => 'scarlet-witch',
            'deskripsi' => 'Scarlet Witch adalah salah satu super hero paling terkenal dari Marvel Cinematic Universe.',
            'harga_sewa' => 160000,
            'stok' => 6,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Spiderman',
            'slug' => 'spiderman',
            'deskripsi' => 'Spiderman adalah salah satu tokoh pahlawan super paling terkenal di film-film Marvel Cinematic Universe.',
            'harga_sewa' => 120000,
            'stok' => 8,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Sukuna',
            'slug' => 'sukuna',
            'deskripsi' => 'Sukuna adalah salah satu antagonis utama dari serial manga dan anime Jujutsu Kaisen.',
            'harga_sewa' => 120000,
            'stok' => 8,
            'id_kategori' => 1,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Superman',
            'slug' => 'superman',
            'deskripsi' => 'Superman adalah pahlawan super paling terkenal dari DC Universe.',
            'harga_sewa' => 170000,
            'stok' => 5,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Dr.  Strange',
            'slug' => 'dr-strange',
            'deskripsi' => 'Dr. Strange adalah salah satu pahlawan super terkenal dari Marvel Cinematic Universe.',
            'harga_sewa' => 240000,
            'stok' => 5,
            'id_kategori' => 2,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Tifa Final Fantasy',
            'slug' => 'tifa-final-fantasy',
            'deskripsi' => 'Tifa merupakan salah satu karakter playabel dari serial game Final Fantasy.',
            'harga_sewa' => 150000,
            'stok' => 4,
            'id_kategori' => 4,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Red Hood',
            'slug' => 'red-hood',
            'deskripsi' => 'Red Hood adalah tokoh utama dari cerita dongeng Little Red Hood.',
            'harga_sewa' => 120000,
            'stok' => 8,
            'id_kategori' => 3,
        ]);
        
        Kostum::create([
            'nama_kostum' => 'Wonder Woman',
            'slug' => 'wonder-woman',
            'deskripsi' => 'Wonder Woman adalah salah satu karakter super hero dari DC yang paling terkenal.',
            'harga_sewa' => 180000,
            'stok' => 8,
            'id_kategori' => 2,
        ]);
    }
}
