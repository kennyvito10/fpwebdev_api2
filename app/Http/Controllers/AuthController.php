<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Bill;
use App\Billdetail;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Response;
use Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;




class AuthController extends Controller
{
    public function signup(Request $request){
        $address = new Address;
        $address->province =  $request->province;
        $address->city =  $request->city;
        $address->address =  $request->address;
        $address->postalCode =  $request->postalCode;
        $address->notes =  $request->notes;
        $address->save();

        // $address->dp_url =  $request->session()->get('dp_urls');
        $address_id = DB::table('addresses')->get()->last()->addressid;

        // $request->session()->put('address_ids', $address_ids);
        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'fullName' => $request->fullName,
            'phoneNumber' => $request->phoneNumber,
            'addressID' => $address_id,
            'api_token' => bcrypt($request->email),
        ]);

        

        return response()->json(['message' => 'User Created']);

    }
    public function getUserToken(Request $request){
        $token = User::where('email' , $request->email)->value('api_token');
        if($token==""){
            return response()->json([
                'message' => 'Account Not Found',
                401
                ]);
        }
        return response()->json($token);

    }

    public function login(Request $request){
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json(['error' => 'Email and or Password is wrong',401]);
            }

            $data = DB::table('users')
                        -> join('addresses','addresses.addressid','=','users.addressID')
                        ->where('email',$request->input("email"))
                        -> get();

            return response()->json($data);
    }

    public function seeprofile(Request $request){

        $data = DB::table('users')
            -> join('addresses','addresses.addressid','=','users.addressID')
            ->where('email',$request->email)
            -> get();
            return response()->json($data);

    }

    public function updateprofile(Request $request){
        $data = [
            'email' => $request->email,
        'fullName' => $request->fullName,
        'phoneNumber' => $request->phoneNumber,
        ];

        $adr = [
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'postalCode' => $request->postalCode,
            'notes' => $request->notes,
        
        ];
        // if id equals with $id from specific data to be updated
        Address::where('addressid', $request->addressID)->update($adr);
        User::where('id',$request->id)->update($data);

        return response()->json(['message' => 'User Updated']);

    }

    public function viewuser($id){
        $data = DB::table('users')
            -> join('addresses','addresses.addressid','=','users.addressID')
            ->where('id',$id)
            -> get();

        return response()->json($data);
            
    }
    public function loginadmin(){
        $data = DB::table('admins')
        ->where('id',1)
        -> get();

            return response()->json($data);


        }

    


}
