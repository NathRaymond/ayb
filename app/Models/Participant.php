<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'other_name',
        'address',
        'gender',
        'email',
        'telephone',
        'employment_status',
        'organisation',
        'eavesdrop',
        'is_volunteering',
        'state',
        'country',
        'event_id'
    ];

    //Accessor and mutator
    public function getEventIdAttribute($eventId)
    {
        $event = Event::find($eventId);
        return $event;
    }

    public function setIsVolunteeringAttribute($bool)
    {
        $this->attributes['is_volunteering'] = is_null($bool) ? false : true;
    }

    //Relations


    //
    public static function storeParticipant($participant)
    {
        $participant = [
            "first_name" => $participant->first_name,
            "last_name" => $participant->last_name,
            "other_name" => $participant->other_name,
            "telephone" => $participant->telephone,
            "email" => $participant->email,
            "address" => $participant->address,
            "gender" => $participant->gender,
            "state" => $participant->state,
            "country" => $participant->country,
            "employment_status" => $participant->employment_status,
            "organisation" => $participant->organisation,
            "is_volunteering" => $participant->is_volunteering,
            "eavesdrop" => $participant->eavesdrop,
            "event_id" => $participant->event_id
        ];
        return $response = self::create($participant);
    }

    public function updateParticipant($participant)
    {
        $updateParticipant = Participant::find($participant->id);
        $event_id = $updateParticipant->event_id;
        $updateParticipant->first_name = $participant->first_name;
        $updateParticipant->last_name = $participant->last_name;
        $updateParticipant->other_name = $participant->other_name;
        $updateParticipant->telephone = $participant->telephone;
        $updateParticipant->email = $participant->email;
        $updateParticipant->address = $participant->address;
        $updateParticipant->gender = $participant->gender;
        $updateParticipant->state = $participant->state;
        $updateParticipant->country = $participant->country;
        $updateParticipant->employment_status = $participant->employment_status;
        $updateParticipant->organisation = $participant->organisation;
        $updateParticipant->is_volunteering = $participant->is_volunteering ?? 1;
        $updateParticipant->eavesdrop = $participant->eavesdrop;
        $updateParticipant->event_id = $participant->event_id ?? 1;
        $updateParticipant->save();
        return $updateParticipant;
    }

    /**
     * Return Full Name Of The Participants
     * @return
     */
    public function fullName()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->other_name;
    }

}