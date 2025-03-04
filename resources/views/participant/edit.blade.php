@extends('layouts.admin')


@section('leftMainContnet')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>Participant {{ $participant->fullName()}}</div>

    </div>
    <div class="card-body">
        <x-alert />
        <form action="{{route('participants.update', $participant->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{$participant->first_name}}" id="first_name" placeholder="Enter your first name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{$participant->last_name}}" id="last_name" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label for="other_name">Other Name</label>
                <input type="text" class="form-control" name="other_name" value="{{$participant->other_name}}" id="other_name" placeholder="Enter your last name">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="{{$participant->address}}" id="address" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <label for="address">Telephone</label>
                <input type="text" class="form-control" name="telephone" value="{{$participant->telephone}}" id="telephone" placeholder="Enter your your telephone number">
            </div>

            <div class="form-group">
                <label for="address">Email</label>
                <input type="text" class="form-control" name="email" id="address" value="{{$participant->email}}" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="{{$participant->gender}}" selected="selected">{{$participant->gender}} </option>
                    <option>Select Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>


            <div class="form-group">
                <label for="employment_status">Employment Status</label>
                <select class="form-control" name="employment_status" id="employment_status">
                    <option value="{{$participant->employment_status}}" selected="selected">{{$participant->employment_status}} </option>
                    <option value="not employed">Not Employed</option>
                    <option value="self employed">Self-Employed</option>
                    <option value="Full Time">Full Time </option>
                    <option value="Part Time">Part Time </option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Organisation</label>
                <input type="text" class="form-control" name="organisation" value="{{$participant->organisation}}" id="organisation" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <label for="address">How do you hear about us</label>
                <input type="text" class="form-control" name="eavesdrop" value="{{$participant->eavesdrop}}" id="eavesdrop" placeholder="Enter your your address">
            </div>

            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="{{$participant->is_volunteering}}" name="is_volunteering" id="is_volunteering">
                    <label class="form-check-label" for="is_volunteering">
                        Voluntary
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" value="{{$participant->state}}" id="state" placeholder="Enter your state">
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" value="{{$participant->country}}" id="country" placeholder="Enter your state">
            </div>

            <input type="hidden" name="id" value="{{$participant->id}}">
            <input type="hidden" name="id" value="{{$participant->event_id->id ?? 1}}">

            <button type="submit" class="btn btn-primary">Register</button>
        </form>


    </div>
</div>


@endsection