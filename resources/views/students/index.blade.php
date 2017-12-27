@extends('layouts/app');<!--Extend from the app layout-->
@section('content');<!--Which section we need to extend-->

<div class="col-md-6 col-lg-6 col-lg-offset-3">
    <div class="panel panel-primary">
        <div class="panel-heading">All students</div>
    <div class="panel-body">

    <ul class="list-group">
            @foreach($students as $students)
        <li class="list-group-item"><a href ="/students/{{$students->student_id}}">{{$students->first_name." ".$students->last_name}}</li><!-- This will return the full name from the database-->
      
        </ul>
            @endforeach
     
</div>

@endsection();<!--Ending the section-->