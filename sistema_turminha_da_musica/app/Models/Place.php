<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'zipcode',
        'address',
        'neigborhood',
        'city',
        'number',
        'complement',
        

    ];

    protected function classRoom(){
        return $this->belongsToMany(ClassRoom::class);
    }

    protected function contracts(){
        return $this->belongsToMany(Contract::class);
    }
}
