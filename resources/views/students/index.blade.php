@extends('layouts/app');<!--Extend from the app layout-->
@section('content');<!--Which section we need to extend-->
<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">All students</div>
    <div class="panel-body">
        <ul class="list-group">
             @foreach($students as $students)
             <li class="list-group-item"><a href ="/students/{{$students->id}}">{{$students->user->first_name." ".$students->user->last_name}}</li><!-- This will return the full name from the database-->       
            @endforeach
        </ul>
             
    </div>
</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
</footer>
</div>

@endsection();<!--Ending the section-->