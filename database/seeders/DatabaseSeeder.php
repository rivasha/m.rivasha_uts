<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
{
        // Film Sedang Tayang
        Movie::create([
            'title' => 'Nanti Kita Cerita tentang Hari Ini',
            'director' => 'Angga Dwimas Sasongko',
            'cast' => 'Rio Dewanto, Sheila Dara, Rachel Amanda',
            'genre' => 'Drama',
            'release_year' => 2020,
            'duration' => '121 Menit',
            'poster' => 'nkcthi.jpg',
            'price' => 25000,
            'synopsis' => 'Setiap keluarga punya rahasia. Angkasa, Aurora, dan Awan adalah kakak beradik yang hidup dalam keluarga yang tampak bahagia.'
        ]);

        Movie::create([
            'title' => 'Agak Laen',
            'director' => 'Muhadkly Acho',
            'cast' => 'Bene Dion, Boris Bokir, Indra Jegel, Oki Rengga',
            'genre' => 'Komedi',
            'release_year' => 2024,
            'duration' => '119 Menit',
            'poster' => 'agak_laen.jpg',
            'price' => 20000,
            'synopsis' => 'Empat sekawan penjaga rumah hantu di pasar malam berusaha menyajikan wahana yang seram.'
        ]);

        // Film Akan Tayang (Coming Soon)
        Movie::create([
            'title' => 'Jumbo',
            'director' => 'Ryan Adriandhy',
            'cast' => 'Ariel Tatum, Prince Unico',
            'genre' => 'Animasi',
            'release_year' => 2026,
            'duration' => 'Segera',
            'poster' => 'jumbo.jpg',
            'price' => 43000,
            'synopsis' => 'Kisah seorang anak bernama Don yang menyukai dongeng orang tuanya dan menemukan petualangan tak terduga.'
        ]);Movie::create([
            'title' => 'Bona Fide a Killer',
            'director' => 'John Doe',
            'cast' => 'Reza Rahadian, Nicholas Saputra',
            'genre' => 'Action',
            'release_year' => 2025,
            'duration' => '115 Menit',
            'poster' => 'bona_fide.jpg',
            'price' => 49000,
            'synopsis' => 'Kisah seorang agen rahasia yang harus mengungkap kebenaran di balik konspirasi kejahatan besar yang mengancam keselamatan negara.'
        ]);

        // Film 2: Wednesday
        Movie::create([
            'title' => 'Wednesday',
            'director' => 'Tim Burton',
            'cast' => 'Jenna Ortega, Gwendoline Christie',
            'genre' => 'Misteri',
            'release_year' => 2022,
            'duration' => '45 Menit',
            'poster' => 'wednesday.jpg',
            'price' => 35000,
            'synopsis' => 'Petualangan misteri sekolah Nevermore Academy saat Wednesday Addams berusaha menguasai kemampuan psikisnya dan memecahkan teka-teki pembunuhan.'
        ]);

        // Film 3: Agent Kim
        Movie::create([
            'title' => 'Agent Kim',
            'director' => 'Park Chan-wook',
            'cast' => 'Kim Soo-hyun, Jun Ji-hyun',
            'genre' => 'Komedi Action',
            'release_year' => 2024,
            'duration' => '110 Menit',
            'poster' => 'agent_kim.jpg',
            'price' => 50000,
            'synopsis' => 'Misi kocak namun penuh aksi dari seorang agen rahasia yang menyamar dalam kehidupan sehari-hari demi menyelesaikan tugas negara.'
        ]);
    }
}
