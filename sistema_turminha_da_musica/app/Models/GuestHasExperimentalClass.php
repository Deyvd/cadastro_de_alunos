<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestHasExperimentalClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'guest_id',
        'experimental_class_id'
    ];
}
