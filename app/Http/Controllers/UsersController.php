<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();//Getting all the companies
        return view('users.index', ['users'=>$users]);//Sending the value to the view. (Make sure to send the same name as the view)
        //It should be "=" not "-"
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //This selects the information regarding the user_id
        //$user = User::where('user_id', $user->user_id);//This selects all the occurences
        
        //either
        //$user = User::where('id', $user->id)->first();//We are looking for the first occourence
        //or
       // $user= User::find($user->id);//Check the migration

       // return view('users.show', ['user_details'=>$user]);
       
       $user_details =  User::join('user_roles', 'users.id', '=', 'user_roles.user_id')
        ->get()
        ->where('user_id', '=', $user->id);
        return view('users.show', ['details'=>$user_details]);
       // return ($user_details);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
