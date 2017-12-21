@foreach($students as $student)
{{$student->parent_contact_num}}<!--Two curly braces are same as the "echo" in php-->
    @endforeach

    {{app\Students::all()}}<!--This prints all the data in Json array format-->