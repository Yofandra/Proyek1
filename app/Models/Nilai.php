<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Nilai extends Model
{
    use HasFactory;
    use HasTimestamps;
    protected $table="nilai"; 
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'siswa_nis',
        'kategori_id',
        'nilai',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
