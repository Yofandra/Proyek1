<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas=[
            ['nama_kelas' => '7A'],
            ['nama_kelas' => '7B'],
            ['nama_kelas' => '7C'],
            ['nama_kelas' => '7D'],
            ['nama_kelas' => '7E'],
            ['nama_kelas' => '7F'],
            ['nama_kelas' => '7G'],
            ['nama_kelas' => '7H'],
            ['nama_kelas' => '7I'],
        ];

        DB::table('kelas')->insert($kelas);
    }
}
