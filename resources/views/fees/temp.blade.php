@foreach($students as $student)
{{$student->user->first_name." ".$student->user->last_name}}<br/>
@endforeach

