@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Event</div>
                <div class="card-body">
                    <x-alert />
                    <form action="{{route('event.past.update', $event->id)}}" method="post" enctype="multipart/form-data" class="md-form" >
                        @csrf
                        @method('patch')
                        <div class="form-group input-group">
                            <input type="file" class="form-control-file" value="{{$event->image}}"
                                name="uploadPhoto" id="uploadPhoto" aria-describedby="uploadPhoto">
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label">Name of Event</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" value="{{old('name') ?? $event->name}}"
                                    placeholder="Enter the event name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event_date" class="col-form-label">Date of event</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{old('event_date') ?? $event->event_date}}" name="event_date"
                                 id="event_date"  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="short_note" id="short_note"
                             class="form-control">{{old('short_note') ?? $event->short_note}}</textarea>
                        </div>

                        <input type="hidden" name="id" value="{{$event->id}}">

                        <div class="input-group">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection