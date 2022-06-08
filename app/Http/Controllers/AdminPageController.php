<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminPageController extends Controller
{
    public function plusview(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                return view('admin.add_doctor');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function doctorUpload(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imagename=time() . "." . $image->getClientoriginalExtension();
        $request->file->move('doctor_images',$imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->number = $request->number;
        $doctor->address = $request->address;
        $doctor->specialization = $request->specialization;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message','The Doctor is Added Successfully!');
    }
    public function showAppointment(){
        if(Auth::id()){
            if(Auth::user()->usertype==1){
                $data=appointment::all();
                return view('admin.show_appointment', compact('data'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function approve($id){
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }
    public function cancel($id){
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }
    public function finish($id){
        $data=appointment::find($id);
        $data->status='Completed';
        $data->save();
        return redirect()->back();
    }
    public function delete($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function showDoctor(){
        $data=doctor::all();
        return view('admin.show_doctor',compact('data'));
    }
    public function deleteDoctor($id){
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateDoctor($id){
        $data=doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    public function editDoctor(Request $request, $id){
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->email=$request->email;
        $doctor->number=$request->number;
        $doctor->address=$request->address;
        $doctor->specialization=$request->specialization;
        $doctor->room=$request->room;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctor_images',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message','The Doctor is Updated Successfully!');
    }
    public function emailDisplay($id){
        $data=appointment::find($id);
        return view('admin.email_display', compact('data'));
    }
    public function sendEmail(Request $request,$id){
        $data=appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'attachedtext' => $request->attachedtext,
            'attachedurl' => $request->attachedurl,
            'closing' => $request->closing,
        ];
        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back()->with('message','The Email is Sent Successfuly!');
    }
}
