<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResponsible extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'responsible_id'
    ];
}
