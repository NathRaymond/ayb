<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $fillable = [
        'boot_camp_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        'country',
        'jobtitle',
        'joinas',
        'eventtype',
        'scholarship_token',
        'education_level',
        'why_apply',
        'referral_source',
        'application_date'
    ];

    public function bootcamp()
    {
        return $this->belongsTo(BootCamp::class, 'boot_camp_id');
    }
}
