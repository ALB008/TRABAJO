<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = "editorial";
    use HasFactory;

    protected $fillable = ['nom_edit', 'ciud_edit', 'direc_edit', 'tel_edit'];
}
