<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Model;

class SiswaLogin extends Model
{
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "siswa";
    protected $guard = "siswa";
    protected $primaryKey = "nis";
    protected $fillable = [
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}

