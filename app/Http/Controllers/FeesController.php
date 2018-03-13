<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $fees =  Fee::all();
        return view('fees.index', ['fees'=>$fees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Students::all();
        // foreach ($students as $student) {
        //    $student_id = $student->id;
        // }
        return view('fees.create', ['students'=>$students]);
        print($student_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $fees =Fee::create([
                'student_id'=>$request->input('student_id'),
                'is_paid'=>'1',
                'paid_date'=>$request->input('paid_date'),
                'next_due_date'=>$request->input('next_due_date'),
                'fee'=>$request->input('fee'),
                
            ]);

            if($fees){
                return redirect()->route('fees.show', ['fees'=>$fees->id])
                ->with('success', 'Data saved successfully');
            }
        }
        else
            return('error');
            //return back()->withInput()->with('error', 'Error saving data');//Not working
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        $fees= Fee::find($fee->id);//Check the migration
        return view('fees.show', ['fee'=>$fees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fee $fee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        //
    }
}
