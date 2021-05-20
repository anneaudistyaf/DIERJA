<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [

                'name' => 'Cooking',

            ],
            [

                'name' => 'Programming',

            ],
            [

                'name' => 'Musik',

            ],
        ]);
    }
}
