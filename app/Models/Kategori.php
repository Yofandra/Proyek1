<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Soal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    protected $fillable = [
        'id',
        'name',
    ];
    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
