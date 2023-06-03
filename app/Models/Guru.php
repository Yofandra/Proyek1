<?php
namespace App\Models;

use App\Models\Kelas;
use App\Models\Kategori;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\Guru as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model;
class Guru extends Model
{
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