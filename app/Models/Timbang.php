<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timbang extends Model
{
    use HasFactory;

    protected $table = 'timbangs';
    protected $primaryKey = 'id_timbang';
    protected $guarded =[];
}
