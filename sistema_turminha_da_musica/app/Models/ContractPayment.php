<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_method',
        'contract_id',
        'value',
        'payed_at',
        'status',

    ];
}
