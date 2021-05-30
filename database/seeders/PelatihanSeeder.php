<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelatihans')->insert([
            'judul' => 'Javascript pemula',
            'author' => 'Sandika galih',
            'thumbnail' => 'java.png',
            'video' => ' https://www.youtube.com/embed/RUTV_5m4VeI',
            'kategori_id' => '2',
            'deskripsi' => 'Di seri ini kita akan mempelajari mengenai konsep dasar pemrograman, istilah2 yang ada dalam dunia pemrograman, cara menulis dan mengeksekusi program, dll.'

        ]);
    }
}
