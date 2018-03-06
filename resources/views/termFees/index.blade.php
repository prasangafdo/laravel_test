@extends('layouts/app');
@section('content');
<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">All Fees</div>
    <div class="panel-body">
        <ul class="list-group">
             @foreach($fees as $fee)
             <li class="list-group-item"><a href ="/term-fees/{{$fee->id}}">{{$fee}}</li><!-- This will return the full name from the database-->       
            @endforeach
        </ul>
        <a class="btn btn-lg btn-primary col-sm-offset-1" href="students/create">Add a student</a>
    </div>
</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
</footer>
</div>

@endsection();