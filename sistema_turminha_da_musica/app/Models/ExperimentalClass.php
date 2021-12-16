<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperimentalClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpfCnpj',
        'birthday',
        'ocupation',
        'phone_id',
    ];
}
