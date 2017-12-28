@extends('layouts/app')<!--Extend from the app layout-->
@section('content')
<div class="container col-lg-10 col-md-10 pull-left">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#about">About</a></li>
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
      <div class="panel-heading">Student Details</div>
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

  <h1 class="col-lg-10" id="about">About</h1><!--Move this to the welcome blade-->
  <p></p>
<!--End about-->
</div>



    <div class ="col-lg-2 col-md-2 pull-right">
              <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p style="text-align:center; font-size:14px">
                This is the web interface to Add, Update and/or Delete records of the  <em>ABC International school Student Management System</em> </p>
              </div>
              
              <div class="sidebar-module">
                <h4>Student Management</h4>
                <ol class="list-unstyled">
                  <li><a href="#">Add</a></li>
                  <li><a href="#">Edit</a></li>
                  <li><a href="#">Delete </a></li>
                </ol>
              </div>
              
              <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                  <li><a href="#">March 2014</a></li>
                  <li><a href="#">February 2014</a></li>
                  <li><a href="#">January 2014</a></li>
                  <li><a href="#">December 2013</a></li>
                  <li><a href="#">November 2013</a></li>
                  <li><a href="#">October 2013</a></li>
                  <li><a href="#">September 2013</a></li>
                  <li><a href="#">August 2013</a></li>
                  <li><a href="#">July 2013</a></li>
                  <li><a href="#">June 2013</a></li>
                  <li><a href="#">May 2013</a></li>
                  <li><a href="#">April 2013</a></li>
                </ol>
              </div>
              
    </div>
    <hr/>    
    <footer class="footer col-sm-7 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>

    @endsection()