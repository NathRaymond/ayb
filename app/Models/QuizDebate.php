<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizDebate extends Model
{
    use HasFactory;

    protected $table = 'quiz_nominates';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'institution', 'institution_type', 'institution_email'
    ];

    public function getNameAttribute()
    {
        return ucfirst($this->first_name);
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public static function nominateSchool($nominee) {
        $nomineeData = [
            "first_name" => $nominee->first_name,
            "last_name" => $nominee->last_name,
            "email" => $nominee->email,
            "institution" => $nominee->institution,
            "institution_type" => $nominee->institution_type,
            'institution_email' => $nominee->institution_email,
        ];

        return Self::create($nomineeData);

    }
}
