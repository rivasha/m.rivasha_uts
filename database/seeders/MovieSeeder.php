<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        {
    $this->call([
        MovieSeeder::class,
    ]);
}
        Movie::create([
            'title' => 'Nanti Kita Cerita tentang Hari Ini',
            'director' => 'Angga Dwimas Sasongko',
            'cast' => 'Rio Dewanto, Sheila Dara, Rachel Amanda',
            'genre' => 'Drama',
            'release_year' => 2020,
            'duration' => '121 Menit',
            'poster' => 'nkcthi.jpg',
            'synopsis' => 'Setiap keluarga punya rahasia. Angkasa, Aurora, dan Awan adalah kakak beradik yang hidup dalam keluarga yang tampak bahagia.'
        ]);

        Movie::create([
            'title' => 'Pengabdi Setan 2: Communion',
            'director' => 'Joko Anwar',
            'cast' => 'Tara Basro, Endy Arfian, Bront Palarae',
            'genre' => 'Horor',
            'release_year' => 2022,
            'duration' => '119 Menit',
            'poster' => 'pengabdi_setan_2.jpg',
            'synopsis' => 'Beberapa tahun setelah berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu dan si bungsu Ian.'
        ]);

        Movie::create([
            'title' => 'Agak Laen',
            'director' => 'Muhadkly Acho',
            'cast' => 'Bene Dion, Boris Bokir, Indra Jegel, Oki Rengga',
            'genre' => 'Komedi',
            'release_year' => 2024,
            'duration' => '119 Menit',
            'poster' => 'agak_laen.jpg',
            'synopsis' => 'Empat sekawan penjaga rumah hantu di pasar malam berusaha menyajikan wahana yang seram demi menyelamatkan nasib usaha mereka.'
        ]);
    }
}