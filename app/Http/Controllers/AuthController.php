<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $pwd;
    public function spaAuth(Request $request){
        $request->validate([
        'email'=>'required|email',
        "password"=>'required']);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user=auth()->user();
            if($user->hasRole('teacher'))
                return response()->json(['status'=>'success','message'=>'Login Successfull','token'=>Auth::user()->createToken('MyApp')->plainTextToken,'user'=>$user]);
        }
        return response()->json(['status'=>'failed','message'=>'Invalid Credentials']);
    }
    public function login_attempt(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            "password"=>'required']);
            $credentials = [
                "email" => $request->email,
                "password" => $request->password,
            ];
            if(Auth::attempt($credentials)) {
                return redirect('/');
            }
            
            return back()->withErrors([ "Invalid email and password" ]);
    }
    public function spaLogout()
    {
        request()->user()->currentAccessToken()->delete();
        return response()->json(['status'=>'success','message'=>"Logged Out Successfully"]);
    }
    public function pwdchange(Request $request){
        $request->validate([
            'password' => 'current_password:sanctum',
            "new_pwd"=>'required|confirmed',
            "new_pwd_confirmation"=>'required'
        ]);
        $user=auth()->user();
        $user->password=Hash::make($request->new_pwd);
        $user->is_pwd_changed=true;
        $user->save();
        return response()->json(["status"=>'true','message'=>'Password changed successfully']);
    }
    public function login(Request $request)
    {
        return view('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
