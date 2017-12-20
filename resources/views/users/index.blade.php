@extends('layouts/app');<!--Extend from the app layout-->
@section('content');<!--Which section we need to extend-->
<div class="col-md-6 col-lg-6 col-lg-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">All Users</div>
    <div class="panel-body">
        
        <ul class="list-group">
            @foreach($users as $user)
        <li class="list-group-item">{{$user->first_name}}</li>
        </ul>
            @endforeach
</div>
@endsection();<!--Ending the section-->