<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = "soal";
    


    protected $fillable = [
        'id',
        'kategori_id',
        'soal',
        'opsi_a',
        'opsi_b',
        'opsi_c',
        'opsi_d',
        'opsi_benar',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
