<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wine;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data = json_decode($data_str);

        foreach($data as $wine){
            $new_wine = new Wine();
            $new_wine->winery = $wine->winery;
            $new_wine->wine = $wine->wine;
            $new_wine->rating_average = $wine->rating->average;
            $new_wine->rating_reviews = $wine->rating->reviews;
            $new_wine->location = $wine->location;
            $new_wine->image = $wine->image;

            $new_wine->save();
        }
    }
}
