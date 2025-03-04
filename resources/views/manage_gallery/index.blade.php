@extends('layouts.admin')

@section('rightMainContent')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>Event </div>
            <a href="{{route('gallery.create')}}" class="btn btn-success">Upload Gallery</a>
        </div>
        <div class="card-body">
            @if(count($gallery) <= 0) No record yet @else                     
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col" style="width: 150px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gallery as $member)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$member->name }}</td>
                        <td>{{ $member->short_name }}</td>
                        <td><img  src="{{$member->image}}" alt="Image Preview" height="80" /></td>
                        <td>
                            <a href="{{ route('gallery.edit', $member->id) }}" class="btn btn-link text-danger"><i class="fa fa-trash"></i></a>
                            <a href="{{ route('gallery.edit', $member->id) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('gallery.show', $member->id) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @endif
        </div>
    </div>
</div>
@endsection