<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'course_id',
        'frequency',
        'modality',
        'room_id',
        'days_of_week',
    ];

    protected function course(){
        return $this->hasOne(Course::class);
    }

    protected function room(){
        return $this->belongsTo(Room::class);
    }

    protected function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    protected function contracts(){
        return $this->belongsToMany(Contract::class);
    }
}
