<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'membership_free',
        'starts_at',
        'is_free',
        'ends_at',
        'frequency_payment',
        'expiration_day',
        'assigned_at',
        'upfront_discount',
        'contract_discount',
        'student_id',
        'responsible_id',
        'place_id',
        'contract_interest',
        'is_particular',
        'class_room_id',
    ];

    protected function student(){
        return $this->hasOne(Student::class);
    }

    protected function responsible(){
        return $this->hasOne(Responsible::class);
    }

    protected function place(){
        return $this->hasOne(Place::class);
    }

    protected function classRoom(){
        return $this->hasOne(ClassRoom::class);
    }

    protected function contractPayment(){
        return $this->BelongsTo(ContractPayment::class);
    }
}
