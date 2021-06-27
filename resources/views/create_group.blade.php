@extends('layout')

@section('content')
    <div class="container">
        {{-- <h1>Welcome to Group Chat Application</h1> --}}
            <div class="row">
                <div class="col-md-5">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right mb-3">
                                <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>

                    {{-- @if($groups->count() > 0) --}}
                        <h3>Pick a user to add</h3>
                        <form method="post" action="{{ url('storeGroup') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-5">
                                <label><strong>Group Name :</strong></label>
                                <input type="text" name="group_name" class="form-control"/>
                            </div>
                            <div class="form-group col-md-6">
                                <ul id="users">
                                    @foreach($groups as $value)
                                    <ul>

                                        <label><input type="checkbox" name='users[]' value="{{$value->name}}"> {{ $value->name }}</label>
                                    </ul>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
            </div>
    </div>

