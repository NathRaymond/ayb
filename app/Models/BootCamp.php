<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BootCamp extends Model
{
    use HasFactory;

    // Add eventtype to the fillable array
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'country',
        'jobtitle',
        'joinas',
        'eventtype'
    ];
}
