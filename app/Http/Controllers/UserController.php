<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use validator;
use Hash;
use Auth;
use Session;

class UserController extends Controller
{

    function register(){
        return view('register');
    }

    function UserRegister(Request $request){

        $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'contact' => 'required|digits:11',
             'password' => 'required|min:6|confirmed',
         ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user_detail = new UserDetail();
        $user_detail->user_id = $user->id;
        $user_detail->contact = $request->contact;
        $user_detail->save();

        return redirect("home")->withSuccess('You have signed-in');
     }

    function login(){

        return view('login');
    }

    function userLogin(Request $request){

          $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials))
                {
                    return redirect("home")->withSuccess('You have loged-in');
                }else{
                    return redirect()->back()->with(['error'=>'incoorect credentials']);
                }
        }

        function logout(Request $request){

            Session::forget('name');
            $request->session()->flush();
            return view('login');
        }
}
