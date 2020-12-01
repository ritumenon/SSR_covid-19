<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id','txnid','txnamount','txndate','status', 'gatewayname', 'banktxnid', 'bankname'
    ];
}