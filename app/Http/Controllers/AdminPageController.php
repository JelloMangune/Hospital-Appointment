<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AdminPageController extends Controller
{
    public function plusview(){
        return view('admin.add_doctor');
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
        $data=appointment::all();
        return view('admin.show_appointment', compact('data'));
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
}
