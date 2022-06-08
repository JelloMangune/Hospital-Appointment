<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomePageController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            else{
                $data = appointment::select(
                    'doctor',
                    appointment::raw('COUNT(id) AS doctor_size')
                )
                ->groupBy('doctor')
                ->orderBy('doctor_size', 'DESC')
                ->get();
                $data_doctor = doctor::select(
                    'specialization',
                    doctor::raw('COUNT(id) AS specialization_size')
                )
                ->groupBy('specialization')
                ->orderBy('specialization_size', 'DESC')
                ->get();
                
                $data_status = appointment::select(
                    'status',
                    appointment::raw('COUNT(id) AS status_size')
                )
                ->groupBy('status')
                ->orderBy('status_size', 'DESC')
                ->get();
                return view('admin.home', compact('data', 'data_doctor', 'data_status'));
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
        }
    }
    public function appointment(Request $request){
        $data = new appointment;
        $data->name = $request->name; 
        $data->email = $request->email; 
        $data->date = $request->date; 
        $data->number = $request->number; 
        $data->message = $request->message; 
        $data->doctor = $request->doctor; 
        $data->status = 'In process'; 
        if(Auth::id()){
            $data->user_id = Auth::user()->id; 
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Has Been Processed . We Will Contact You Soon!');
    }

    public function myAppointment(){
        if(Auth::id()){
            if(Auth::user()->usertype==0){
                $userid=Auth::user()->id;
                $appoint=appointment::where('user_id',$userid)->get();
                return view('user.my-appointment', compact('appoint'));
            }
        }
        else{
            return redirect()->back();
        }
        
    }
    public function cancelAppoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Appointment Request Has Been Deleted.');
    }
    public function aboutUs(){
        $doctor = doctor::all();
        return view('user.about-us', compact('doctor'));
    }
    public function doctorPage(){
        $doctor = doctor::all();
        return view('user.doctor-page', compact('doctor'));
    }
    public function newsPage(){
        return view('user.news-page');
    }
}
