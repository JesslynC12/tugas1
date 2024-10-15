<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\movies;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     movies::create([
    //         'movie_title' => 'Masa Mudaaaaaaaa',
    //         'duration' => 120,
    //         'release_date' =>'2024-10-10',
    //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    //     ]);

    //     movies::create([
    //         'movie_title' => 'Indonesia Merdekaaaaaaa',
    //         'duration' => 120,
    //         'release_date' =>'2024-10-20',
    //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    //     ]);

    //     movies::create([
    //         'movie_title' => 'Merah Putihhhhhhhhh',
    //         'duration' => 120,
    //         'release_date' =>'2024-08-10',
    //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    //     ]);

    //     movies::create([
    //         'movie_title' => 'Gen Zzzzzzzz',
    //         'duration' => 120,
    //         'release_date' =>'2024-09-10',
    //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    //     ]);

    //     movies::create([
    //         'movie_title' => 'Sekolahhhhhhhh',
    //         'duration' => 120,
    //         'release_date' =>'2024-10-29',
    //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    //     ]);

    DB::table('movies')->insert([
        [
            'movie_title' => 'Avengers: Endgame',
            'duration' => 181,
            'release_date' => '2019-04-26',
        ],
        [
            'movie_title' => 'The Dark Knight',
            'duration' => 152,
            'release_date' => '2008-07-18',
        ],
        [
            'movie_title' => 'Inception',
            'duration' => 148,
            'release_date' => '2010-07-16',
        ],
        [
            'movie_title' => 'Interstellar',
            'duration' => 169,
            'release_date' => '2014-11-07',
        ],
        [
            'movie_title' => 'The Shawshank Redemption',
            'duration' => 142,
            'release_date' => '1994-09-23',
        ],
    ]);
 }
}
