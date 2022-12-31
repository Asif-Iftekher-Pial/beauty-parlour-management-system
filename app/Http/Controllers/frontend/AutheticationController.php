<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\Aboutus;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AutheticationController extends Controller
{
    public function home(){
        $adds = Advertisement::take(5)->get();
        $services = Service::orderBy('id','desc')->take(4)->get();
        return view('frontend.home.home',compact('adds','services'));
    }

    public function about(){
        $about = Aboutus::first();
        return view('frontend.partials.aboutus.aboutus',compact('about'));
    }
    public function allServices(){
        $allservices = Service::orderBy('id','desc')->paginate(10);
        // return $allservices;
        return view('frontend.partials.services.allServices',compact('allservices'));
    }


    public function loginPage(){
        return view('frontend.auth.login');
    }
    public function regPage(){
        return view('frontend.auth.registration');
    }

    public function loginSubmit(Request $request){
        // return $request->all();
    }

    public function regSubmit(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email'=>'required|unique:users,email',
            'password' =>'required',
            'address'=>'required',
            'mobile'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('frontend/images/client/'), $filename);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'mobile' => $request->mobile,
            'role'=>'client',
            'image'=>$filename
        ]);

        return redirect()->route('loginPage')->with('message','Registration Successfull');
    }

    public function clientSubmitLogin(Request $request){
        // return $request;
        $credentials  = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) { //login attempt
            $request->session()->regenerate();
            
            return redirect()->route('home')->with('message', 'Login successful!');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function clientLogout(){
        Auth::logout();
        return redirect()->route('loginPage')->with('message', 'Logout successful!');

    }

    public function myProfile(){
        return view('frontend.auth.profile');
    }

    public function myProfileUpdate(Request $request){
        $request->validate([
            'name' =>'required',
            'address' =>'required',
            'mobile' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $authUser = User::where('id',Auth::user()->id)->first();


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('frontend/images/client/'), $filename);
            @unlink(public_path('frontend/images/client/'.$authUser->image));

        }
        $authUser->update([
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'image'=>$filename
        ]); 

        return back()->with('message', 'Your profile has been updated successfully');
    }

}
