<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
      @include('admin.sidebar')

      <div class="container" align="center" style="padding-top:100px;">
      
      @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
      @endif

        <form action="{{url('doctor_uploaded');}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Doctor Name</label>
                <input type="text" name="name" placeholder="Write the doctor's name" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Email</label>
                <input type="email" name="email" placeholder="Write the doctor's email" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Phone Number</label>
                <input type="number" name="number" placeholder="Write the doctor's number" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Address</label>
                <input type="text" name="address" placeholder="Write the doctor's address" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Specialization</label>
                <select name="specialization" style="width:200px;" required>
                    <option>---Select---</option>
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
                <label style="display:inline-block;width:200px;">Room Number</label>
                <input type="number" name="room" placeholder="Write the room number" required>
            </div>
            <div style="padding:15px;">
                <label style="display:inline-block;width:200px;">Image</label>
                <input type="file" name="file">
            </div>
            <div style="padding:15px; color:black;">
                <input type="submit" class="btn btn-primary" style="background-color:#007BFF;">
            </div>
        </form>    
      </div>
    </div>
    <!-- container-scroller -->
      @include('admin.jscript')
  </body>
</html>