<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Siswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 

class Siswa extends Model       
{
    protected $table="siswa"; 
    public $timestamps= false;
    protected $primaryKey = 'idSiswa';

    protected $fillable = [
        'idSiswa',
        'username',
        'password',
        'nama',
        'kelas',
        'nis',
        'no_absen',
    ];
}
