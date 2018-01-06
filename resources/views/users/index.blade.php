@extends('layouts/app');<!--Extend from the app layout-->
@section('content');<!--Which section we need to extend-->
<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
    
        <div class="panel-heading">All Users 
        </div>
    <div class="panel-body">
        
        <ul class="list-group">
            @foreach($users as $user)
        <li class="list-group-item"><a href ="/users/{{$user->id}}">{{$user->first_name." ".$user->last_name}}</li><!-- This will return the full name from the database-->
            @endforeach
        </ul> 
        <a class="btn btn-lg btn-primary col-sm-offset-3" href="users/create">Add a user</a>
        <a class="btn btn-lg btn-primary col-sm-offset-1" href="students/create">Add a student</a>
	</div>
	</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>
</div>
@endsection();<!--Ending the section-->