<?php

namespace Database\Seeders;

use App\Models\Aroma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper as Help;

class AromasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aromas = json_decode(file_get_contents(__DIR__ . '/aromi-vini.json'));
        foreach($aromas as $aroma ){
           $new_aroma= new Aroma();
           $new_aroma-> name= $aroma;
           $new_aroma-> slug= Help::createSlug($new_aroma->name, Aroma::class);


           $new_aroma->save();


        }


    }
}
