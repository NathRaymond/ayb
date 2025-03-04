<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'institution',
        'designation',
        'group',
    ];

    public static function storeParticipant($data)
    {
        $data = [
            "first_name" => $data->first_name,
            "last_name" => $data->last_name,
            "email" => $data->email,
            "phone" => $data->phone,
            "institution" => $data->work_place,
            "designation" => $data->designation,
            "group" => $data->group
        ];
        return $response = self::create($data);
    }
}