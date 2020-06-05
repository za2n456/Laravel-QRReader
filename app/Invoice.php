<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'user_id', 'plan_id', 'total', 'payment_method', 'note', 'status'
    ];
}
