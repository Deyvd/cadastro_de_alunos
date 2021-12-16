<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday'
    ];

    protected function studentHasResponsibles(){
        return $this->belongsToMany(StudentHasResponsible::class);
    }

    protected function contracts(){
        return $this->belongsToMany(Contract::class);
    }
}
