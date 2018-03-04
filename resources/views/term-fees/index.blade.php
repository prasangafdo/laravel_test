@extends('layouts/app')<!--Extend from the app layout-->
@section('content')<!--Which section we need to extend-->
<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
    
        <div class="panel-heading">All Term Fees details 
        </div>
    <div class="panel-body">
        
        <ul class="list-group">
            @foreach($termFees as $fees)
        <li class="list-group-item"><a href ="/term-fees/{{$fees->student_id}}">{{$fees->student->parent_contact_num." ".$fees->is_paid}}</li><!--Need to add user details-->
            @endforeach
        </ul> 
        <a class="btn btn-lg btn-primary col-sm-offset-3" href="term-fees/create">Add a user</a>
        <a class="btn btn-lg btn-primary col-sm-offset-1" href="term-fees/create">Add a student</a>
	</div>
	</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>
</div>
@endsection()