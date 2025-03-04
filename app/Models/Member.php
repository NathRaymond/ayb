<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'other_name', 'address', 'telephone',
        'email', 'gender','employment_status','role_id', 'volunteer', 'eavesdrop',
        'status', 'organisation', 'state', 'country'];

     /**
     * Return Full Name Of The Member
     * @return
     */
    public function fullName()
    {
        return $this->last_name.' '.$this->first_name.' '.$this->other_name;
    }

        /**
         * This function store or create new member, used for member registration
         *
         * @param mixed $member
         * @return $member
         */
    public static function storeMember($member)
    {
        $memberData = [
            'first_name' => $member->first_name,
            'last_name' => $member->last_name,
            'other_name' => $member->other_name,
            'address' => $member->address,
            'telephone' => $member->telephone,
            'email' => $member->email,
            'gender' => $member->gender,
            'employment_status' => $member->employment_status,
            'organisation' => $member->organisation,
            'volunteer' => $member->volunteer,
            'role_id' => $member->role_id,
            'eavesdrop' => $member->eavesdrop,
            'status' => $member->status,
            'state' => $member->state,
            'country' => $member->country
        ];

        return Self::create($memberData);
    }

    /**
     * update user member details
     */
    public static function updateMember($member) {

        $memberData = Member::find($member->id);
        $volunteer= '';
        if ($member->volunteer == null) {
            $volunteer = 0;
        } else {
            $volunteer = $member->volunteer;
        }


        $memberData->first_name = $member->first_name;
        $memberData->last_name = $member->last_name;
        $memberData->other_name = $member->other_name;
        $memberData->address = $member->address;
        $memberData->telephone = $member->telephone;
        $memberData->email = $member->email;
        $memberData->gender = $member->gender;
        $memberData->employment_status = $member->employment_status;
        $memberData->organisation = $member->organisation;
        $memberData->volunteer = $volunteer;
        $memberData->role_id = $member->role_id;
        $memberData->eavesdrop = $member->eavesdrop;
        $memberData->status = $member->status;
        $memberData->state = $member->state;
        $memberData->country = $member->country;
        return $memberData->save();

    }

}
