<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soci extends Model
{
    use HasFactory;
    protected $fillable = [
        'nif',
        'nom',
        'cognoms',
        'adreca',
        'poblacio',
        'comarca',
        'fixe',
        'mobil',
        'email',
        'quotaMes',
        'aportAny',
        'nomONG'
    ];
}
