@extends('layout')

@section('content')
<center>
    <h1>Welcome to Group Chat Application</h1>
</center>
<br><br>
<div class="container">
    <a href="{{ url('createGroup') }}" class="btn btn-success" style="float: right margin:auto "> Create New Group</a>
    <a href="{{url('logout')}}" class="btn btn-danger" style="float: right margin:auto ">logout</a>
    @if($groups->count() > 0)
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sr#</th>
            <th scope="col">Group Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($groups as $name)

          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $name->group_name }}</td>
                <td>
                    {{-- <a href="{{ url('addMembers') }}" class="btn btn-primary">Add members</a> --}}
                    <a href="{{ url('viewMembers/{id}') }}" class="btn btn-primary">view members</a>
                    <a href="{{ url('viewChat') }}" class="btn btn-success">open chat</a>
                    <a href="{{ url('deleteAll') }}" class="btn btn-danger">Delete</a>
                </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
                        <br><p>No Group found! try to create a new group by going to <a href="{{ url('createGroup') }}">Create Group</a></p>
                    @endif


</div>

