<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'age',
        'sex',
        'telephone',
        'address',
        'blood_type',
        'diagnostic',
        'email',
    ];
}
