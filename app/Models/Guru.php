<?php
namespace App\Models;

use App\Models\Kelas;
use App\Models\Kategori;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
    // use Illuminate\Database\Eloquent\Model;
class Guru extends Model
{
    use Notifiable;
    protected $table = "guru";
    public $timestamps = false;
    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'nama_guru',
        'foto',
        'username',
        'password',
    ];

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
    public function kategori(){
        return $this->hasMany(Kategori::class);
    }
}