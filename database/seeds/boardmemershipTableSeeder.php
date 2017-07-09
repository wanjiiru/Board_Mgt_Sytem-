<?php

use Illuminate\Database\Seeder;

class boardmemershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_memberships')->insert([
            'name' => str_random(10),
            'board_id' => str_random(10),
            'position' => str_random('position'),
            'user_id' =>str_random ('user_id'),
        ]);

    }
}
