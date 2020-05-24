<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'user_id', 'plan_id', 'invoice_id', 'start_date', 'end_date'
    ];
}
