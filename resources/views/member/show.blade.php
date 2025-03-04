@extends('layouts.admin')

@section('rightMainContent')
<div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Member {{ $member->fullName() }}</div>
                <a href="{{route('member.index')}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">

                <x-alert />
                <table class="table table-striped">
                    <tr>
                        <th>First Name:</th>
                        <td>{{$member->first_name}}</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>{{$member->last_name}}</td>
                    </tr>
                    <tr>
                        <th>Other Name:</th>
                        <td>{{$member->other_name}}</td>
                    </tr>
                    <tr>
                        <th>Telephone:</th>
                        <td>{{$member->telephone}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$member->email}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{$member->address}}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{$member->gender}}</td>
                    </tr>
                    <tr>
                        <th>State:</th>
                        <td>{{$member->state}}</td>
                    </tr>
                    <tr>
                        <th>Country:</th>
                        <td>{{$member->country}}</td>
                    <tr>
                        <th>Employment Status:</th>
                        <td>{{$member->employment_status}}</td>
                    </tr>
                    <tr>
                        <th>Organisation:</th>
                        <td>{{$member->organisation}}</td>
                    </tr>
                    <tr>
                        <th>I want to volunteer:</th>
                        <td>{{$member->volunteer}}</td>
                    </tr>
                    <tr>
                        <th>Role:</th>
                        <td>{{$member->role_id}}</td>
                    </tr>

                    <tr>
                        <th>Status:</th>
                        <td>{{$member->status}}</td>
                    </tr>
                    <tr>
                        <th>How do you hear about us?</th>
                        <td>{{$member->eavesdrop}}</td>
                    </tr>
                    <tr>
                        <th>Date Joined:</th>
                        <td>{{$member->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Last Edited:</th>
                        <td>{{$member->updated_at}}</td>
                    </tr>
                </table>

            </div>
        </div>
@endsection