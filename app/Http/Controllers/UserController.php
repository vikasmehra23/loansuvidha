<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{


    public function login()
    {
        return view('signup/login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if (auth()->user()) {
                return redirect()->route('admin.dashboard')
                ->withSuccess('You have successfully logged in!');
            }else{
                return redirect()->route('home');
            }

            
        }

        return back()->withErrors(['email' => 'Your provided credentials do not match in our records.', ])->onlyInput('email');

    }

    public function user_profile(Request $request){

        // dd($request);
        $user = auth()->user();
        return view('admin.pages.profile', ['user' => $user]);
    }


    public function profileupdate(Request $request){

        $request->validate([
            'username' => 'required|string|max:255',
            'useremail' => 'required|email|unique:users,email,'.auth()->id(),
           
        ]);
    
        
        $user = auth()->user();
    
       
        $user->name = $request->username;
        $user->email = $request->useremail;

        $user->save();
    
        return redirect()->back()->withSuccess('Profile updated successfully!');


    }

    public function logout(Request $request)
    {
        if (auth()->user() != null) {
            $redirect_route = '/';
        } 

        Auth::logout();
        Session::flush();

        return redirect('/');

    }



}