<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Siswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 
use App\Models\Kelas;

class Siswa extends Model       
{
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
        'nis',
        'no_absen',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function nilai(){
        return $this->belongsTo(Nilai::class);
    }
}
