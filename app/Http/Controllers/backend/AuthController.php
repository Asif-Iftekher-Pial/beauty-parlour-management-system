<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function home(){
        return view('backend.home.home');
    }

    public function login(){
        return view('backend.partials.auth.login');
    }
    
    public function submitLogin(Request $request){
        // return $request;
        $credentials  = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) { //login attempt
            $request->session()->regenerate();

            if ($request->has('rememberMe')) {
                Cookie::queue('backendcookieNameEmail', $request->email, 1440); /* 1440 means cookie will clear after 24 hours*/
                Cookie::queue('backendcookieNamePassword', $request->password, 1440);
            }

            return redirect()->route('dashboard')->with('message', 'Login successful!');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function adminLogout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('message', 'Logout successful!');

    }

    public function profile(){

        return view('backend.partials.auth.profile');
    }
    public function profileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile'=>'required',
            'address' => 'required'
        ]);
        $data = $request->all();
        $updateData =  User::where('id',Auth::user()->id)->first();
        $updateData->fill($data)->save();

        return back()->with('message', 'Your profile has been updated');
    }
    public function profileUpdateImage(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $updateData =  User::where('id',Auth::user()->id)->first();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/images/admin/'), $filename);
            @unlink(public_path('backend/images/admin/'.$updateData->image));
        }
       
        $updateData->update([
            'image'=>$filename
        ]);
        return back()->with('message', 'Your profile Picture has been updated');
    }
}
