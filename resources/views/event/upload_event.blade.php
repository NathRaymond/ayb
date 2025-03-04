@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row row-cols-3 justify-content-center">
        <div class="col-md-2">
            @include("layouts.components.side_nav")
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Past Event Photo</div>
                <div class="card-body">
                    <x-alert />
                    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data" class="md-form" >
                        @csrf
                        <div class="form-group input-group">
                            <input type="file" class="form-control-file" name="uploadPhoto" id="uploadPhoto" aria-describedby="uploadPhoto">
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label">Name of Event</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" placeholder="Enter the event name"
                                value="{{old('name') ?? ''}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event_date" class="col-form-label">Date of event</label>
                            <div class="col-sm-10">
                                <input type="text" value="" name="event_date" id="event_date"
                                value="{{old('event_date') ?? '' }}"  class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="short_note" id="short_note" class="form-control">{{old('short_note') ?? ''}}</textarea>
                        </div>

                        <div class="input-group">
                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>
                    </form>

                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header">Past Event</div>
                <div class="card-body">

                    @if(count($events) <= 0) No record yet @else <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 250px">Details</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$event->name}}</td>
                                <td>{{$event->short_note}}</td>
                                <td>{{$event->event_date}}</td>
                                <td>
                                    <a href="{{route('event.past.show', $event->id)}}" class="btn btn-link"><span class="fas fa-eye"></span></a>
                                    <a href="{{route('event.past.edit', $event->id)}}" class="btn btn-link"><span class="fas fa-edit"></span></a>
                                    <a href="{{route('event.past.delete', $event->id)}}" class="btn btn-link text-danger"
                                    onclick="event.preventDefault(); 
                                    if(confirm('Are your want to delete {{$event->name}}')){
                                        document.getElementById('form-delete-{{$event->id}}').submit();
                                    }"
                                    ><span class="fas fa-trash"></span></a>
                                    <form id="{{'form-delete-'.$event->id}}" method="post" action="{{route('event.past.delete', $event->id)}}">
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