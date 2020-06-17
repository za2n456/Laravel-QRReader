<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama','nik', 'nrm', 'kl', 'tl', 'add', 'wa', 'cp', 'py1', 'py2', 'da', 'fa'
    ];
}
