<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataibu extends Model
{
    use HasFactory;
    protected $table= "users";
    protected $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_ibu', 'nama_suami', 'tempat_lahir', 'tgl_lahir', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan', 'No_tlp', 'agama', 'NIK', 'No_KK', 'No_BPJS', 'gakin', 'jabatan', 'email', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}