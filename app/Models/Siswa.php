<?php
namespace App\Models;
use App\Models\Kelas;
use App\Models\Kategori; 
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model       
{
    use Notifiable;
    protected $table="siswa"; 
    public $timestamps= false;
    protected $primaryKey = 'nis';

    protected $fillable = [
        'nis',
        'username',
        'password',
        'foto',
        'nama',
        'kelas_id',
        'no_absen',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    // public function nilai(){
    //     return $this->belongsTo(Nilai::class);
    // }
    public function kategori(){
        return $this->belongsToMany(Kategori::class, "nilai", "siswa_nis","kategori_id");
    }
}
