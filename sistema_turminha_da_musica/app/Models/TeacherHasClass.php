<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherHasClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'class_room_id',
    ];

    protected function teacher(){
        return $this->hasOne(Teacher::class);
    }

    protected function classRoom(){
        return $this->hasOne(ClassRoom::class);
    }
}
