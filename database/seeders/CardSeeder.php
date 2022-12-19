<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = array(
            "g23fdf7279b219dc0432e07ad28f06635aaff9fb3d471e20d6b936bd5865f88f68a383fd8baac02e9d586a59b5af6c07b_640.jpg", 
            "g3f3c8f4af303d1723f5d5e2f3050e53373d2708f67a2db6ae4e920d6e88c8242790303c2abea53e744b1b690e79613e5_640.jpg", 
            "g55938cab3ca5e1d6a85a240c8d3a1c3a732aca43a41b7b3cce22c49d27d96615d3fd1d16170172bff6920861c0e851cb_640.jpg",
            "g7fc3a09598639f740c4f4439cecc4c8552915c8dacd5dd819b51bb48d16e135212ebf723e097507e90233544ddc1f9ab_640.jpg",
            "g91d447ecfe72f9eec67075695beb60be3f06e9f341d675a76e847a2fd150139425d7ca3a1de19130389065a4706df7a5_640.jpg",
            "g9bb86129888f745636e5fbecad664a4876b527558d4ce0f9597fe74f9c5bcadff217f28765325333a0101074ec31d64f_640.jpg",
            "gb59c197fa6bc857bd4427f0d8a949b64711bd7ebe2715dbe5855b6b01c0c0337166333bdade0b5fb668d7a5edc3c37cd_640.png",
            "gf5435c0dc95b478e31cbc32ec4359f91cbcec0dd8bfde2c4855206240a287844a123fa37bee90973876eac47871fcef3_640.png",
            "incognitous.jpg"
        );

        $urlBase = "https://raw.githubusercontent.com/thiagoliof/images_game_memo/main/";
        
        $count = 1;
        foreach ($cards as $card) {
            
            DB::table('cards')->insert([
                'name' => 'car' . (string)$count,
                'url' => $urlBase . $card
            ]);
            $count++;
        }
    }
}
