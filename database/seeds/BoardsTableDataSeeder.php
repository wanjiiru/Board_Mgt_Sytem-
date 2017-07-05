<?php

use Illuminate\Database\Seeder;

class BoardsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            for ($i=0; $i < 3; $i++) {
                DB::table('boards')->insert([
                    'name' => str_random(8),
//                    'id' => str_random(12)
                ]);
            }
        }
    }

}
