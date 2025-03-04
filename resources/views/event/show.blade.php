@extends('layouts.admin')


@section('content')
<div class="row row-cols-3 justify-content-center">
    <div class="col-md-2">
        @include("layouts.components.side_nav")
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Event {{ $event->name }}</div>
                <a href="{{route('event.dashboard')}}" class="btn btn-success">Back</a>
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
                                <td>{{$event->event_outline}}</td>
                            </tr>
                            <tr>
                                <th>Event Date:</th>
                                <td>{{$event->event_date}}</td>
                            </tr>
                            <tr>
                                <th>Participant Number:</th>
                                <td>{{$event->participant_number}}</td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td>{{$event->is_closed}}</td>
                            </tr>
                            <tr>
                                <th>Fee:</th>
                                <td><span>&#8358;</span>{{$event->fee}}</td>
                            </tr>
                            <tr>
                                <th>Early Payment:</th>
                                <td><span>&#8358;</span>{{$event->early_birds}}</td>
                            </tr>
                            <tr>
                                <th>Late Payment:</th>
                                <td><span>&#8358;</span>{{$event->late_payment}}</td>
                            </tr>
                            <tr>
                                <th>Discount:</th>
                                <td><span>&#8358;</span>{{$event->discount}}</td>
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

@endsection