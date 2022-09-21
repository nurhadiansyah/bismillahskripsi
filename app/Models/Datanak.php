<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datanak extends Model
{
    use HasFactory;
    protected $table = 'dataanaks';
    protected $primaryKey = 'id_anak';
    protected $guarded =[];
}
