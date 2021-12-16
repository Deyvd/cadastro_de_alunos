<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'place_id'
    ];
    
    protected function place(){
        return $this->hasOne(Place::class);
    }

    protected function classRoom(){
        return $this->belongsTo(ClassRoom::class);
    }
}
