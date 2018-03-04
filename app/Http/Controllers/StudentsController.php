<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $students = Students::all();
       // return view('students.index', ['students'=>$students]);

       //Join students and users
        $user_details =  Students::all();
        return view('students.index', ['students'=>$user_details]);
       //return ($user_details);
    

     //$users = Students::all();//Getting all the companies
     //   return view('students.index', ['students'=>$users]);//Sending the value to the view. (Make sure to send the same name as the view)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            if(Auth::check()){
            $student =Students::create([
                'name'=>$request->input('name'),
                'student_address'=>$request->input('student_address'),
                'grade'=>$request->input('grade'),
                'parent_contact_num'=>$request->input('parent_contact_num'),
                
            ]);

            if($student){
                return redirect()->route('students.show', ['student'=>$student->id])
                ->with('success', 'Student created successfully');
            }
        }
        else
            //return('error');
            return back()->withInput()->with('errors', 'Error saving data');//Not working
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        //
       /* $student_details =  Students::join('users', 'students.user_id', '=', 'users.id')
        ->select('students.*','students.id as student_id' , 'users.*')
        ->get()
        ->where('student_id', '=', $student->id);//This includes the user_id
        return view('students.show', ['student_details'=>$student_details]);
*/
        $dd= Students::find($student->id);//Check the migration
        return view('students.show', ['student'=>$dd]);
       //return ($dd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $student)
    {
        //
        $dd= Students::find($student->id);//Check the migration
        return view('students.edit', ['student'=>$dd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {
        $findStudent = Students::find($student->id);

        if($findStudent->delete()){
            return redirect()->route('students.index')
            ->with('success', 'Student Deleted Successfully');
        }
  
        return back()->withInput()->with('error', 'Student could not be deleted.');
  
      return ($student);
    }
}
