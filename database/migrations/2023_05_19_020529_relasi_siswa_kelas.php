<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table){
            $table->dropColumn('kelas');
            $table->Integer('kelas_idKelas')->nullable();
            $table->foreign('kelas_idKelas')->references('idKelas')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            
            $table->dropForeign(['kelas_idKelas']);
        });
    }
};
