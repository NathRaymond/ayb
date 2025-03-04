@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Participant</div>
                    <a href="{{route('export.participant')}}" class="btn btn-success">Export Data</a>
                </div>
                <div class="card-body">

                    <x-alert />
                    @if(count($participants) <= 0) No record yet @else <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 250px">Details</th>
                                <th scope="col">Attendee</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $participant)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$participant->first_name}}</td>
                                <td>{{$participant->last_name}}</td>
                                <td>{{$participant->state}}</td>
                                <td>{{$participant->country}}</td>
                                <td>{{$participant->address}}</td>
                                <td>
                                    <a href="{{route('participants.edit', $participant->id)}}" class="btn btn-link">Edit</a>
                                    <a href="{{route('participants.view', $participant->id)}}" class="btn btn-link text-danger">view</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection