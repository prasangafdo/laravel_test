@extends('layouts/app')<!--Using the same code as the edit.blade but have removed the values and id-->
@section('content')

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
<hr/>

    <div class=" col-lg-10 col-lg-offset-1">

          <form method="post" action="{{ route('term-fees.store')}}">
   
          {{csrf_field() }}<!--We need to add this in order to work a form in laravel-->
          
            <div class="form-group">
              <label for="student-id">Student ID</label>
             <input type="text" 
                    required
                    id="student-id"
                    name="student-id"
                    class="form-control" 
                    placeholder="Student ID"/>
            </div>
            <div class="form-group">
              <label for="paid-date">Paid Date</label>
             <input type="text"
                    required
                    id="paid-date"
                    name="paid-date" 
                    class="form-control"
                    placeholder="Paid Date"/>{{--Need to get the current date automatically--}}
            </div>
            <div class="form-group">
              <label for="next-due-date">Next Due Date</label>
             <input type="text" 
                  required
                  id="next-due-date"
                  name="next-due-date"
                  class="form-control" 
                  placeholder="Next Due Date"/><!--Need to add a date time picker-->
            </div>
            <div class="form-group">
              <label for="fee">Fee</label>
             <input type="text" 
                  required
                  id="fee"
                  name="fee"
                  class="form-control" 
                  placeholder="Fee"/><!--Need to calculate automatically-->
            </div>
            <button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">Submit</button>
          </form>
    </div>


    </div>


<div class ="col-lg-2 col-md-2 pull-right">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p style="text-align:center; font-size:14px">This is the web interface to Edit, Update and/or Delete records of the  <em>ABC International school Student Management System</em> </p>
          </div>

          <div class="sidebar-module">
            <h4>User Management</h4>
            <ol class="list-unstyled">
              <li><a href="/students/create">Add a student</a></li>
              <li><a href="/users">All users</a></li>
              <li><a href="/students/">All students</a></li>
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
</div>
<hr/>    
      <footer class="footer col-sm-7 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>

    @endsection()