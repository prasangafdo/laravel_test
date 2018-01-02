@if (isset($error)&&count($errors)>0)
<!--Dissmissable alert template from W3 schools-->
<div class="alert alert-danger alert-dismissable">
<!--Code from the tutorial-->
<!--
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
-->
   
<!--Both codes do the same task. We can use the following code without adding an external button tag-->
<!--Original code-->
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  @foreach ($errors->all() as $error)
  <li><strong>{!! session()->get('success')!!}</strong></li>
 @endforeach
  <!--Original code ends here-->
</div>
@endif