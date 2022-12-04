<?php

use Illuminate\Database\Seeder;

class DrillEasySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $drills = [
        ['id' => 1, 'country_id' => 1, 'continents_id' => 1, 'difficulty_id' => 1, 'img' => 'storage/img/沖縄県首里城.jpeg', 'area_name' => '沖縄県首里城', 'user_id' => 2],
      ];
      //DBのテーブルを指定して変数をインサート
      DB::table('drills')->insert($drills);
    }
}
