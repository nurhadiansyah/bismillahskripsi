<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;
    protected $table = 'imunisasi';
    protected $primaryKey = 'id_imun';
}
