<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday',
        'cpfCnpj',
        'ocupation',
        'phone_id',
        'user_id',
        'person_type_id',
    ];
}
