@extends('layouts/app')<!--Extend from the app layout-->
@section('content')
<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"></h3><!--Setting the name-->
      </div>

      <div class="jumbotron">
        <h1>{{$user_details->first_name." ".$user_details->last_name}}</h1>
       
    
        <p class="lead">{{$user_details->user_role}}</p>

      <!--  <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>-->
      </div>

      <div class="row marketing">
      <div class="col-md-6 col-lg-8 col-lg-offset-2">
      <div class="panel panel-primary">
          <div class="panel-heading">All Users</div>
      <div class="panel-body">
          
          <ul class="list-group">
             
          <li class="list-group-item"><a href ="/users/{{$user_details->first_name}}">{{'User details will show here'}}</li><!-- This will return the full name from the database-->
          </ul>

  </div>
        </div>

        
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

    </div>
    @endsection()