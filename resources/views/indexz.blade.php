@extends('layout')

@section('content')
    <div class="container">
        <h1>Welcome to Group Chat Application</h1>
            <div class="row">
                <div class="col-md-5">
                    <a href="{{ url('createGroup') }}" class="btn btn-success">Create New Group</a>
                    @if($groups->count() > 0)
                        <h3>Pick a group to chat with</h3>
                        <ul id="groups">
                            @foreach($groups as $user)
                                <li>{{ $user->name }}
                                    <a href="{{ url('viewMembers') }}" class="btn btn-primary">
                                        view members
                                    </a>
                                <a href="{{ url('viewChat') }}" class="btn btn-success">
                                    open chat
                                    </a>
                                <a href="{{ url('deleteAll') }}" class="btn btn-danger">
                                    Delete</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <br><p>No Group found! try to create a new group by going to <a href="{{ url('createGroup') }}">Create Group</a></p>
                    @endif
                </div>
            </div>
    </div>

