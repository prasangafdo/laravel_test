<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Actual inserting happens here
        if(Auth::check()){
            $user =User::create([
                'name'=>$request->input('name'),
                'user_address'=>$request->input('user_address'),
                'date_of_birth'=>$request->input('date_of_birth'),
                'user_id'=>Auth::user()->id
            ]);

            if($user){
                return redirect()->route('users.show', ['company'=>$user->id])
                ->with('success', 'User created successfully');
            }
        }
        
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
       
        $dd= User::find($user->id);//Check the migration
        return view('users.show', ['user'=>$dd]);
        //return ($user);

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
       // $user_details =  User::all();
        //return view('users.edit', ['details'=>$user_details]);

                                    // $user_details =  User::join('user_roles', 'users.id', '=', 'user_roles.user_id')
                                    // ->get()
                                    // ->where('user_id', '=', $user->id);//This includes the user_id
                                    // return view('users.edit', ['details'=>$user_details]);
                                    //Working 

        //return ($user_details);
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
        //Update data

        $userUpdate = User::where('id', $user->id)
                            ->update([
                                'first_name'=>$request->input('first_name'),//Here comes the name of the object
                                'last_name'=>$request->input('last_name'),
                                'user_address'=>$request->input('user_address'),
                                'date_of_birth'=>$request->input('date_of_birth')
                            ]);
        if($userUpdate){
            return redirect()->route('users.show',  ['details'=>$user])
            ->with('success', 'User updated successfully');//Return message
        }                        
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //Delete a user

      //  dd($user);//Temp to view details that we are trying to destroy

      $findUser = User::find($user->id);

      if($findUser->delete()){
          return redirect()->route('users.index')
          ->with('success', 'User Deleted Successfully');
      }

      return back()->withInput()->with('error', 'User could not be deleted.');

    return ($user);
     // return back()->withInput()->with('error', 'User could not be deleted');
    }
}
