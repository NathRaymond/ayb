@extends('layouts.admin')

@section('rightMainContent')

<div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>Members</div>
                    <a href="{{ route('export.member') }}" class="btn btn-success">Export Data</a>
                </div>
                <div class="card-body">

                    <x-alert />
                    @if(count($members) <= 0) No record yet @else                     
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date Joined</th>
                                <th scope="col" style="width: 150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$member->fullName() }}</td>
                                <td>{{ $member->telephone }}</td>
                                <td>{{ $member->role_id}}</td>
                                <td></td>
                                <td>{{ $member->created_at}}</td>
                                <td>
                                    <a href="{{ route('member.edit', $member->id) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('member.show', $member->id) }}" class="btn btn-link text-danger"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @endif

                </div>
            </div>
@endsection