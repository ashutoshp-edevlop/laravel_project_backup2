<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function register_view(){
        return view('auth.register');
    }
    public function login(Request $request){
        // dd($request->all());
        //validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //login user here
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        } else{
        return redirect('Login')->withError('Login details are incorrect...');
        }
    }
    public function register(Request $request){
        // dd($request->all());
        //validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            // 'mobile' => 'required|numeric|min:10',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
        //save in users table

        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            // 'mobile' =>$request->mobile,
            'password' =>\Hash::make($request->password)
        ]);

        //login user here
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('home');
        } else{
        return redirect('register')->withError('Error');
        }
    }
    public function home(){
        return view('home');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
