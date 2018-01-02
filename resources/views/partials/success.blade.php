@if (session()->has('success'))
<!--Dissmissable alert template from W3 schools-->
<div class="alert alert-success alert-dismissable">
<!--Code from the tutorial-->
<!--
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
-->
   
<!--Both codes do the same task. We can use the following code without adding an external button tag-->
<!--Original code-->
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>
        {!! session()->get('success')!!}
    </strong>
 
  <!--Original code ends here-->
</div>
@endif