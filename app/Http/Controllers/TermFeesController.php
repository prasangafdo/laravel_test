<?php

namespace App\Http\Controllers;

use App\TermFees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $termFees = TermFees::all();
        return view('termFees.index', ['fees'=>$termFees]);
        // foreach ($termFees as $fees) {
        //     print($fees->student);
        // }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('term-fees.create');
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
            $fees =TermFees::create([
                'student_id'=>$request->input('student-id'),
                'is_paid'=>'1',
                'paid_date'=>$request->input('paid-date'),
                'next_due_date'=>$request->input('next-due-date'),
                'fee'=>$request->input('fee'),                
            ]);
            // Change is-paid later

            if($fees){
                return redirect()->route('term-fees.show', ['fees'=>$fees->id])
                ->with('success', 'Fees added successfully');
            }
        }
        else
            //return('error');
            return back()->withInput()->with('errors', 'Error saving data');//Not working
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TermFees  $termFees
     * @return \Illuminate\Http\Response
     */
    // public function show(TermFees $termFees)
    // {
    //     print($termFees);
    //     //$dd= TermFees::find($termFees->id);
    //     //print_r($dd);
    //     //return view('term-fees.show', ['fees'=>$dd]);
    // }

     public function show(TermFees $student)
    {
        //
       /* $student_details =  Students::join('users', 'students.user_id', '=', 'users.id')
        ->select('students.*','students.id as student_id' , 'users.*')
        ->get()
        ->where('student_id', '=', $student->id);//This includes the user_id
        return view('students.show', ['student_details'=>$student_details]);
*/
        print($student);
       //return ($dd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TermFees  $termFees
     * @return \Illuminate\Http\Response
     */
    public function edit(TermFees $termFees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TermFees  $termFees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermFees $termFees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TermFees  $termFees
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermFees $termFees)
    {
        //
    }
}
