<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

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
}
