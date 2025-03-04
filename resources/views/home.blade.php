@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row cols-5 ">
                        <div class="col ml-3 mt-3">
                            <div class="border p-3" style="width: 10rem; height: 12rem;">
                            To create new event go click the button below
                            <a href="{{route('event.dashboard')}}" class="btn btn-success btn-block">Events</a>
                            </div>
                        </div>

                        <div class="col ml-3 mt-3">
                            <div class="border p-3" style="width: 10rem; height: 12rem;">
                            Manage user that registered for event
                            <a href="{{route('participants')}}" class="btn btn-success btn-block">Participants</a>
                            </div>
                        </div>
                        <div class="col ml-3 mt-3">
                            <div class="d-flex align-items-start flex-column border p-3" style="width: 10rem; height: 12rem;">
                                <div>Manage member or user that registered to be member.</div>
                                <a href="{{route('member.index')}}" class="btn btn-success btn-block mb-auto">Members</a>
                            </div>
                        </div>
                        <div class="col ml-3 mt-3"></div>
                        <div class="col ml-3 mt-3"></div>                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
