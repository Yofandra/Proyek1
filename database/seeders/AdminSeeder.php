<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nis'=>'124567',
            'username'=>'siswa',
            'nama'=>'Jhon',
            'foto'=>'images/oke.jpg',
            'no_absen'=>'1',
            'kelas_idKelas'=>1,
            'password'=>Hash::make('12345678')
        ]);
    }
}
