<?php

use Illuminate\Database\Seeder;

class FiveContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $continents = [
        ['id' => 1, 'continents_id' => 1, 'continents_name' => 'アジア'],
        ['id' => 2, 'continents_id' => 2, 'continents_name' => 'アメリカ'],
        ['id' => 3, 'continents_id' => 3, 'continents_name' => 'ヨーロッパ'],
        ['id' => 4, 'continents_id' => 4, 'continents_name' => 'オセアニア'],
        ['id' => 5, 'continents_id' => 5, 'continents_name' => 'アフリカ'],
      ];
      DB::table('five_continents')->insert($continents);
    }
}
