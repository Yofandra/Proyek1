<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;
    protected $table="nilai"; 
    
    protected $fillable = [
        'id',
        'siswa_nis',
        'nilai',
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
