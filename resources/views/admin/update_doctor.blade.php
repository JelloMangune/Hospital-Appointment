<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style type="text/css">
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
   @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')
     <div class="main-panel">
     <div class="container" align="center"><h1 style="Font-size:30px;margin-top:20px;">UPDATE DOCTOR</h1></div>
     <div class="container" align="center" style="padding:20px;width:500px;border-width:2px;margin-top:10px;border-style:solid;border-color:black;border-radius:10px;">
     @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
      @endif
        <form action="{{url('edit-doctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px;">
                <label>Doctor Name</label>
                <input type="text" name="name" value="{{$data->name}}">
            </div>
            <div style="padding:15px;">
                <label>Email</label>
                <input type="email" name="email" value="{{$data->email}}">
            </div>
            <div style="padding:15px;">
                <label>Phone Number</label>
                <input type="number" name="number" value="{{$data->number}}">
            </div>
            <div style="padding:15px;">
                <label>Address</label>
                <input type="text" name="address" value="{{$data->address}}">
            </div>
            <div style="padding:15px;">
                <label>Specialization</label>
                <select name="specialization" style="width:200px;" required>
                    <option>{{$data->specialization}}</option>
                    <option value="Allergy and Immunology">Allergy and Immunology</option>
                    <option value="Anatomic/Clinical Pathology">Anatomic/Clinical Pathology</option>
                    <option value="Anesthesiology">Anesthesiology</option>
                    <option value="Cardiovascular Disease">Cardiovascular Disease</option>
                    <option value="Critical Care Medicine">Critical Care Medicine</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Emergency Medicine">Emergency Medicine</option>
                    <option value="Endocrinology, Diabetes and Metabolism">Endocrinology, Diabetes and Metabolism</option>
                    <option value="General Practice">General Practice</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="General Surgery">General Surgery</option>
                    <option value="Geriatric Medicine">Geriatric Medicine</option>
                    <option value="Hematology and Oncology">Hematology and Oncology</option>
                    <option value="Infectious Disease">Infectious Disease</option>
                    <option value="Internal Medicine">Internal Medicine</option>
                    <option value="Internal Medicine/Pediatrics">Internal Medicine/Pediatrics</option>
                    <option value="Interventional Cardiology">Interventional Cardiology</option>
                    <option value="Neonatal-Perinatal Medicine">Neonatal-Perinatal Medicine</option>
                    <option value="Nephrology">Nephrology</option>
                    <option value="Neuroradiology">Neuroradiology</option>
                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                    <option value="Orthopedic Surgery">Orthopedic Surgery</option>
                    <option value="Otolaryngology">Otolaryngology</option>
                    <option value="Pain Medicine and Pain Management">Pain Medicine and Pain Management</option>
                    <option value="Pediatric Cardiology">Pediatric Cardiology</option>
                    <option value="Pediatric Hematology/Oncology">Pediatric Hematology/Oncology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
                    <option value="Plastic Surgery">Plastic Surgery</option>
                    <option value="Preventive Medicine">Preventive Medicine</option>
                    <option value="Psychiatry">Psychiatry</option>
                    <option value="Pulmonary Disease">Pulmonary Disease</option>
                    <option value="Radiation Oncology">Radiation Oncology</option>
                    <option value="Radiology and Diagnostic Radiology">Radiology and Diagnostic Radiology</option>
                    <option value="Rheumatology">Rheumatology</option>
                    <option value="Sports Medicine (Orthopedic Surgery)">Sports Medicine (Orthopedic Surgery)</option>
                    <option value="Thoracic Surgery">Thoracic Surgery</option>
                    <option value="Urology">Urology</option>
                    <option value="Vascular and Interventional Radiology">Vascular and Interventional Radiology</option>
                    <option value="Vascular Surgery">Vascular Surgery</option>
                </select>
            </div>
            <div style="padding:15px;">
                <label>Room Number</label>
                <input type="text" name="room" value="{{$data->room}}">
            </div>
            <div style="padding:15px;">
                <label>Old Image</label>
                <img height=150px width=150px src="doctor_images/{{$data->image}}">
            </div>
            <div style="padding:15px;">
                <label>Change Image</label>
                <input type="file" name="file">
            </div>
            <div style="padding:15px;">
                <input type="submit" class="btn btn-primary" style="background-color:#007BFF;">
            </div>
        </form>

    
     </div>
    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>