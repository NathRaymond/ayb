@extends('layouts.admin')


@section('content')
<div class="row row-cols-3 justify-content-center">
    <div class="col-md-2">
        @include("layouts.components.side_nav")
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Participant {{ $participant->fullName() }}</div>
                <a href="{{route('participants', $participant->id)}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">

                <x-alert />
                <table class="table table-striped">
                    <tr>
                        <th>Event:</th>
                        <td>{{$participant->event_id->name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th>First Name:</th>
                        <td>{{$participant->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>{{$participant->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Other Name:</th>
                        <td>{{$participant->other_name}}</td>
                    </tr>
                    <tr>
                        <th>Telephone:</th>
                        <td>{{$participant->telephone}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$participant->email}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{$participant->address}}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{$participant->gender}}</td>
                    </tr>
                    <tr>
                        <th>State:</th>
                        <td>{{$participant->state}}</td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td>{{$participant->country}}</td>
                    <tr>
                        <th>Employment Status:</th>
                        <td>{{$participant->employment_status}}</td>
                    </tr>
                    <tr>
                        <th>Organisation:</th>
                        <td>{{$participant->organisation}}</td>
                    </tr>
                    <tr>
                        <th>Is it Voluntary:</th>
                        <td>{{$participant->is_volunteering}}</td>
                    </tr>
                    <tr>
                        <th>How do you hear about us?</th>
                        <td>{{$participant->eavesdrop}}</td>
                    </tr>
                    <tr>
                        <th>Date Joined:</th>
                        <td>{{$participant->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Last Edited:</th>
                        <td>{{$participant->updated_at}}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection