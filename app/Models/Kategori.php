<?php

namespace App\Models;

use App\Models\Soal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
    ];
    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
}
