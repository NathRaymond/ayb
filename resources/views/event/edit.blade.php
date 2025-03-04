@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$event->name}}</div>
                <div class="card-body">

                    <x-alert />
                    <form action="{{route('update.event', ['event' => $event->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="upload">Upload</label>
                            <input type="file" class="form-control-file" name="upload" id="upload"
                             value="{{$event->image}}">
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label">Name of event</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" value="{{old('name') ?? $event->name}}"
                                 placeholder="Enter the event name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event_outline" class="col-form-label">Short Note <br>about the event</label>
                            <div class="col-sm-10">
                                <textarea name="event_outline" id="event_outline"
                                 class="form-control">{{old('event_outline') ?? $event->event_outline}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label">Expected number<br>
                                of participant</label>
                            <div class="col-sm-10">
                                <input type="text" name="participant_number" id="name"
                                 value="{{old('participant_number') ?? $event->participant_number}}" placeholder="Enter participan number e.g. 50" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event_date" class="col-form-label">Date of event</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{old('event_date') ?? $event->event_date}}"
                                 name="event_date" id="event_date"  class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fee" class="col-form-label">Fee</label>
                            <div class="col-sm-10">
                                <input type="text" name="fee" id="fee" value="{{old('fee') ?? $event->fee}}"
                                 placeholder="Enter amount to be charge for this event" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="early_birds" class="col-form-label">Early Payment</label>
                            <div class="col-sm-10">
                                <input type="text" name="early_birds" value="{{old('early_birds') ?? $event->early_birds}}"
                                 id="early_birds" placeholder="Enter amount to be charge for this event" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount" class="col-form-label">Discount</label>
                            <div class="col-sm-10">
                                <input type="text" name="discount" value="{{old('discount') ?? $event->discount}}"
                                 id="discount" placeholder="Enter amount to be charge for this event" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="late_payment" class="col-form-label">Late Payment</label>
                            <div class="col-sm-10">
                                <input type="text" name="late_payment"
                                 value="{{old('late_payment') ?? $event->late_payment}}" id="late_payment" placeholder="Enter amount to be charge for this event" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label form-check-label" for="is_closed">Closed Event</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input name="is_closed" {{ old('is_closed') || ($event->is_closed == true) ? 'checked' : ''}}
                                     class="form-check-input" type="checkbox" id="is_closed">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$event->id}}">

                        <div class="form-group row">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection