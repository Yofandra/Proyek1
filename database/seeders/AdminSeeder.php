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
        DB::table('guru')->insert([
            'nip'=>'124567',
            'nama_guru'=>'guru',
            'foto'=>'images/oke.jpg',
            'username'=>'guru',
            'password'=>Hash::make('12345678')
        ]);
    }
}
