<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpfCnpj',
        'birthday',
        'ocupation',
        'phone_id',
    ];

    protected function phone(){
        return $this->hasOne(Phone::class);
    }

    protected function studentHasResponsible(){
        return $this->belongsToMany(StudentHasResponsible::class);
    }

    protected function contracts(){
        return $this->belongsToMany(Contract::class);
    }
}
