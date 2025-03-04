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
                <div>Event {{ $event->name }}</div>
                <a href="{{route('event.past')}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">

                <x-alert />
                <div class="row d-flex justify-content-between">
                    <div class="col-7">
                        <table class="table table-striped">
                            <tr>
                                <th>Event:</th>
                                <td>{{$event->name}}</td>
                            </tr>
                            <tr>
                                <th>Goals:</th>
                                <td>{{$event->short_note}}</td>
                            </tr>
                            <tr>
                                <th>Event Date:</th>
                                <td>{{$event->event_date}}</td>
                            </tr>
                            <tr>
                                <th>Last Modified Date:</th>
                                <td>{{$event->updated_at}}</td>
                            </tr>

                            <tr>
                                <th>Created Date:</th>
                                <td>{{$event->created_at}}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-5">
                        <img src="{{$event->image64}}" alt="{{$event->name}}" style="width: 100%">
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
</div>

@endsection