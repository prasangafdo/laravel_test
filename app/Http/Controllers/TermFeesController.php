<?php

namespace App\Http\Controllers;

use App\TermFees;
use Illuminate\Http\Request;

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
        return view('term-fees.index', ['termFees'=>$termFees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TermFees  $termFees
     * @return \Illuminate\Http\Response
     */
    public function show(TermFees $termFees)
    {
        //
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
