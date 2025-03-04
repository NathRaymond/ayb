@extends('layouts.admin')

@section('rightMainContent')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>Member {{ $member->fullName()}}</div>
        <a href="{{route('member.index')}}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <x-alert />
        <form action="{{route('member.update', $member->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{$member->first_name}}" id="first_name" placeholder="Enter your first name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{$member->last_name}}" id="last_name" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label for="other_name">Other Name</label>
                <input type="text" class="form-control" name="other_name" value="{{$member->other_name}}" id="other_name" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="{{$member->address}}" id="address" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label for="address">Telephone</label>
                <input type="text" class="form-control" name="telephone" value="{{$member->telephone}}" id="telephone" placeholder="Enter your your telephone number">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{$member->email}}" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="{{$member->gender}}" selected="selected">{{$member->gender}} </option>
                    <option>Select Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>


            <div class="form-group">
                <label for="employment_status">Employment Status</label>
                <select class="form-control" name="employment_status" id="employment_status">
                    <option value="{{$member->employment_status}}" selected="selected">{{$member->employment_status}} </option>
                    <option value="not employed">Not Employed</option>
                    <option value="self employed">Self-Employed</option>
                    <option value="Full Time">Full Time </option>
                    <option value="Part Time">Part Time </option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Organisation</label>
                <input type="text" class="form-control" name="organisation" value="{{$member->organisation}}" id="organisation" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <label for="address">How do you hear about us</label>
                <input type="text" class="form-control" name="eavesdrop" value="{{$member->eavesdrop}}" id="eavesdrop" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="{{$member->volunteer}}" name="volunteer" id="volunteer">
                    <label class="form-check-label" for="volunteer">
                        Do you want to Volunteer
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="role_id">Role</label>
                <select class="form-control" name="role_id" id="role_id">
                    <option>Select One Option</option>
                    <option value="1">Sponsor</option>
                    <option value="2">Member</option>
                </select>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" value="{{$member->state}}" id="state" placeholder="Enter your state">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" value="{{$member->country}}" id="country" placeholder="Enter your state">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" value="{{$member->status}}" id="status" placeholder="Enter your status">
            </div>

            <input type="hidden" name="id" value="{{$member->id}}">

            <button type="submit" class="btn btn-primary">Register</button>
        </form>


    </div>
</div>


@endsection