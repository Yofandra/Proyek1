<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $table="kelas"; 
    public $timestamps= false;
    protected $primaryKey = 'idKelas';


    protected $fillable = [
        'idKelas',
        'nama_kelas',
        'guru_nip',
    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
