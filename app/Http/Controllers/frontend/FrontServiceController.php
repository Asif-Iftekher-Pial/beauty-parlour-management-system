<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontServiceController extends Controller
{
    public function serviceDetail($id)
    {
        $serviceDetail = Service::where('id', $id)->first();
        return view('frontend.partials.services.serviceDetail', compact('serviceDetail'));
    }

    public function reserveAppointment(Request $request, $id)
    {

        $appointDate = Carbon::parse($request->appointmentDate)->format('Y-m-d');

        $today = Carbon::now()->format('Y-m-d');

        if ($appointDate >= $today) {
            $service_id = Service::where('id', $id)->pluck('id')->first();
            $client_id = User::where('id', Auth::user()->id)->pluck('id')->first();
            // check if the apointment date is already exists or not
            if (Appointment::where('client_id', $client_id)->where('service_id', $service_id)->where('appointment_date', $appointDate)->exists()) {

                // if client_id and service_id exist then check the appointment date is already in the database or not

                return redirect()->back()->with('error', 'Apointment date already exists,Select another date');
                // return 'exists';
            } else {
                $createAppoinment = Appointment::create([
                    'service_id' => $service_id,
                    'client_id' => $client_id,
                    'appointment_date' => $appointDate,
                    'appointment_time' => $request->time,
                    'payment_status' => 'unpaid',
                ]);
                if ($createAppoinment) {
                    return redirect()->back()->with('message', 'Appointment created');
                } else {
                    return redirect()->back()->with('error', 'Appointment not created');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Invalid date,Select date from today!');
        }

    }

    public function myAppointment()
    {
        $myAppointments = Appointment::where('client_id', Auth::user()->id)->with('services')->get();
        // return$myAppointment;
        return view('frontend.partials.myAppointment.myAppointment', compact('myAppointments'));
    }

    public function myAppointmentDelete($id){
        $delete = Appointment::where('id', $id)->first();
        $delete->delete();
        return redirect()->back()->with('error', 'Appointment was canceled');
    }

    public function contact(){
        return view('frontend.partials.contact.contact');
    }
    public function contactSubmit(Request $request){
        // return $request->all();
        $request->validate([
            'mobile'=>'required|numeric',
            'message'=>'required',
        ]);
        Contact::create([
            'mobile'=>$request->mobile,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'user_id'=>Auth::user()->id,
            'message'=>$request->message,
        ]);
       
        return redirect()->back()->with('success', 'Message sent successfully,Admin you contact with you soon');
    }

    public function contactList(){
       $contactList = Contact::where('user_id', Auth::user()->id)->get();
        return view('frontend.partials.contact.viewMessage',compact('contactList'));
    }

    public function deleteContact($id){
        $contactList = Contact::where('user_id', $id)->first();
        $contactList->delete();
        return back()->with('error', 'message deleted successfully');
    }
}
