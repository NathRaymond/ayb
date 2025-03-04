@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Events</div>
                    <a href="/events/create" class="btn btn-success">Create Events</a>
                </div>
                <div class="card-body">

                    <x-alert />
                    @if(count($events) <= 0) No record yet @else <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Attendee</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$event->name}}</td>
                                <td>{{$event->participant_number}}</td>
                                <td>{{$event->is_closed}}</td>
                                <td>{{$event->event_date}}</td>
                                <td>
                                    <a href="{{route('event.show', $event->id)}}" class="btn btn-link"><span class="fas fa-eye"></span></a>
                                    <a href="{{'/events/'.$event->id.'/edit'}}" class="btn btn-link"><span class="fas fa-edit"></span></a>
                                    <a href="{{route('event.delete', $event->id)}}" class="btn btn-link text-danger"
                                    onclick="event.preventDefault(); 
                                    if(confirm('Are your want to delete {{$event->name}}')){
                                        document.getElementById('form-delete-{{$event->id}}').submit();
                                    }"
                                    > <span class="fas fa-trash"></span></a>
                                    <form id="{{'form-delete-'.$event->id}}" method="post" action="{{route('event.delete', $event->id)}}">
                                        @csrf
                                        @method('delete')
                                    </form>
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