<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cards = DB::table('cards')->get();

        foreach ($cards as $card) {
            
            $name = 'game 1';
            $card_id = $card->id;

            DB::table('games')->insert([
                'name' => $name,
                'card_id' => $card_id
            ]);
        }
        

        $index = 0;
        foreach ($cards as $card) {
            
            if ($index < 4){

                $name = 'game 2';
                $card_id = $card->id;

                DB::table('games')->insert([
                    'name' => $name,
                    'card_id' => $card_id
                ]);

                $index++;
            }
            else{
                break;
            }
        }
        
    }
}
