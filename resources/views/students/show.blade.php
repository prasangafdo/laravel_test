
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

        @foreach($student_details as $name)
      <h1>{{$name->first_name." ".$name->last_name}}</h1>
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
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Grade</th>
                <th>Parent's contact number</th>
            </tr>
            @foreach($student_details as $details)
            <tr>
                <td>{{$details->user_address}}</td>
                <td>{{$details->date_of_birth}}</td>
                <td>{{$details->grade}}</td>
                <td>{{$details->parent_contact_num}}</td>
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