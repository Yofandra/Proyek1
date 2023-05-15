<?php
namespace App\Models;
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
        'kelas',
        'username',
        'password',
 ];
}