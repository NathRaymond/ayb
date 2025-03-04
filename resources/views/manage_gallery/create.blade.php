@extends('layouts.admin')

@section('rightMainContent')
<div class="container-fluid">
    
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>Event </div>
            <a href="{{route('gallery.manage')}}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <x-alert />
                <div class="form-group">
                    <label for="picsUpload">Picture Event Upload</label>
                    <input type="file" class="form-control" name="picsUpload" id="picsUpload" placeholder="Select a file">
                </div>
                
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Enter event name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Caption">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection