<?php

use Illuminate\Database\Seeder;

class data extends Seeder
{

    public function run()
    {
        for($i =1; $i<=10;$i++ ){
            DB::table('lophoc')->insert([
                'tenlop' => str_random(10),
                'chitiet' => str_random(10)
            ]);
        }
    }
}
