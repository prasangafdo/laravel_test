@extends('layouts/app')<!--Extend from the app layout-->
@section('content')
<div class="">
<div class="container col-lg-10 col-md-10 pull-left">
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

      <h1>{{$user->first_name." ".$user->last_name}}</h1><!--We can use it directly without a foreach loop-->

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

            <tr>
                <td>{{$user->first_name." ".$user->last_name}}</td>
                <td>{{$user->user_address}}</td>
                <td>{{$user->date_of_birth}}</td>
                <td>{{$user->userRole->user_role}}</td><!--Getting user role from "userRole" function in the model-->
            </tr>

            <!--<th>- Table heading-->
            <!--<th>- Table data-->
        </table>
    </div>
</div>

    </div>
</div>

<script type="text/javascript">
  function getDelete(){//onclick to delete the data
 var result = confirm('Are you sure you wish to delete user: {{$user->first_name." ".$user->last_name}}');//Alert Dialog message
                      if( result ){//If the user clicks on the delete button (onClick())
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          
}
</script>

<div class ="col-lg-2 col-md-2 pull-right">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p style="text-align:center; font-size:14px">This is the web interface to Edit, Update and/or Delete records of the  <em>ABC International school Student Management System</em> </p>
          </div>

          <div class="sidebar-module">
            <h4>User Management</h4>
            <ol class="list-unstyled"><!--No need to add a user in the show.blade-->
              <li><a href="/users/create">Add a user</a></li>
              <li><a href="/students/create">Add a student</a></li>
              <li><a href="/users/{{$user->id}}/edit">Edit</a></li>
              <li><a href="/users">View all users</a></li>

<!--Delete code copied from "daveozoalor's github"-->

<li>            
           <!--Original code without a function-->
           <!--   <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete user: {{$user->first_name." ".$user->last_name}}');//Alert Dialog message
                      if( result ){//If the user clicks on the delete button (onClick())
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>-->

              <!--Improved code with a function-->
              <a href="#" onclick="getDelete()"> Delete</a>

              <form id="delete-form" action="{{ route('users.destroy',[$user->id]) }}" 
                method="POST" style="display: none;"> <!--Link to the delete action in the controller-->
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form> 
              </li>

<!--Delete code ends-->
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
      <footer class="footer col-sm-7 col-sm-offset-2">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>

    @endsection()