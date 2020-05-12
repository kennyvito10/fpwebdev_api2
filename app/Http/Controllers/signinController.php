<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Address;

class signinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicIndex()
    {
        if (Session::get('login') == FALSE){
            return Redirect::to("/");
        } 
        else{

            return view('dashboard');
        }
    }

    public function login(Request $request){
        $users = User::all()->where('email',  $request->input("email"))->where('password', $request->input("password"));
        $count = $users->count();

        if ($count == 0) {
            return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Password');
        } else {
            $data = DB::table('users')
                        -> join('addresses','addresses.id','=','users.addressID')
                        ->where('email',$request->input("email"))
                        -> get();
            foreach ($data as $dat) {
                Session::put('id',$dat->id);
                Session::put('email',$dat->email);
                Session::put('fullName',$dat->fullName);
                Session::put('phoneNumber',$dat->phoneNumber);
                Session::put('province',$dat->province);
                Session::put('city',$dat->city);
                Session::put('address',$dat->address);
                Session::put('postalCode',$dat->postalCode);
                Session::put('notes',$dat->notes);
                Session::put('login',TRUE);
            }

            return view('dashboard');
        }
        //return dump($users);
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
        //
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
