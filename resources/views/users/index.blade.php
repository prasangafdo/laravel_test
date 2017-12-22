@extends('layouts/app');<!--Extend from the app layout-->
@section('content');<!--Which section we need to extend-->
<div class="col-md-6 col-lg-6 col-lg-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">All Users</div>
    <div class="panel-body">
        
        <ul class="list-group">
            @foreach($users as $user)
        <li class="list-group-item"><a href ="/users/{{$user->id}}">{{$user->first_name." ".$user->last_name}}</li><!-- This will return the full name from the database-->
       <!-- {{$user->first_name}} This is the original version of retrieving data from the database-->
        </ul>
            @endforeach
</div>
@endsection();<!--Ending the section-->