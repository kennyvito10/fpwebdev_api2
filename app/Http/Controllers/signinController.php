<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\Address;

class signinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sessionchecksignup(){
        if (Session::get('login') == FALSE){
            return view("signup");
        }
        else{
            return Redirect::to("/");
        } 
    }

    public function sessionchecksignin(){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{
            return Redirect::to("/");
        } 
    }

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
        // $users = User::all()->where('email',  $request->input("email"))->where('password', $request->input("password"));
        // $count = $users->count();

        $email = $request->input("email");
        $password = $request->input("password");

        $users = User::all()->where('email', $email);
        $count = $users->count();
        if ($count == 0) {
            return Redirect::to(URL::previous())->with('message', 'Invalid E-mail and or Passwords');
            }
            else{
            $data = DB::table('users')
                    ->where('email',$email)
                        -> get();
            foreach($data as $data) {
                $hashedpw = $data->password;
            }

            if(Hash::check($password, $hashedpw)){
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

            
        }
        //return dump($users);
    }


    public function signup(Request $request){
		// if (Session::get('id') == "") return Redirect::to(".");
        // return view('signup');	
            
        $address = new Address;
        $address->province =  $request->input('province');
        $address->city =  $request->input('city');
        $address->address =  $request->input('address');
        $address->postalCode =  $request->input('postalCode');
        $address->notes =  $request->input('notes');
        $address->save();

        // $address->dp_url =  $request->session()->get('dp_urls');
        $address_id = DB::table('addresses')->get()->last()->id;

        // $request->session()->put('address_ids', $address_ids);
        User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'fullName' => $request->input('fullName'),
            'phoneNumber' => $request->input('phoneNumber'),
            'addressID' => $address_id
        ]);

        return view('/signin');
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
