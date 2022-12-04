<?php

use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $difficulty = [
        ['id' => 1, 'difficulty_id' => 1, 'difficulty_name' => 'Easy'],
        ['id' => 2, 'difficulty_id' => 2, 'difficulty_name' => 'Nomal'],
        ['id' => 3, 'difficulty_id' => 3, 'difficulty_name' => 'Hard'],
        ['id' => 4, 'difficulty_id' => 4, 'difficulty_name' => 'Very Hard'],
      ];
      DB::table('difficulty')->insert($difficulty);
    }
}
