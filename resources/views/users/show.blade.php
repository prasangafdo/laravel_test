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
      @foreach($details as $dd)
      <h1>{{$dd->first_name." ".$dd->last_name}}</h1>
      @endforeach()
     

      <!--  <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>-->
      </div>

      <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">User Details</div>
  <div class="panel-body">
    <p>This table shows the details of each and every user</p>
  </div>

  <!-- Table -->
    <div class=" col-lg-8 col-lg-offset-2">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>User Role</th>
            </tr>
            @foreach($details as $details)
            <tr>
                <td>{{$details->first_name." ".$details->last_name}}</td>
                <td>{{$details->user_address}}</td>
                <td>{{$details->date_of_birth}}</td>
                <td>{{$details->user_role}}</td>
            </tr>
            @endforeach
            <!--<th>- Table heading-->
            <!--<th>- Table data-->
        </table>
    </div>
</div>

    <hr/>    
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

    </div>
    @endsection()