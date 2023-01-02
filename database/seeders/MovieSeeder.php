<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            [
                "title" => "The Dark Knight",
                "director" => "Christopher Nolan",
                "language" => "English",
                "year_released" => "2008",
            ],
            [
                "title" => "The Godfather",
                "director" => "Francis Ford Coppola",
                "language" => "English",
                "year_released" => "1972",
            ],
            [
                "title" => "It's a Wonderful Life",
                "director" => "Frank Capra",
                "language" => "English",
                "year_released" => "1946",
            ],
            [
                "title" => "Parasite",
                "director" => "Bong Joon Ho",
                "language" => "English",
                "year_released" => "2019",
            ],
            [
                "title" => "Gladiator",
                "director" => "Ridley Scott",
                "language" => "English",
                "year_released" => "2000",
            ],
            [
                "title" => "Joker",
                "director" => "Todd Phillips",
                "language" => "English",
                "year_released" => "2019",
            ],
        ]);
    }
}
