<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Soal;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    protected $fillable = [
        'id',
        'nama',
    ];
    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    public function siswa(){
        return $this->belongsToMany(Siswa::class,"nilai", "siswa_nis","kategori_id")->withPivot('nilai');
    }
}
