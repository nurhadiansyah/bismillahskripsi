<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisimunisasi extends Model
{
    use HasFactory;

    protected $table = 'jenisimunisasi';
    protected $primaryKey = 'id_j_imun';
    protected $guarded =[];
}
