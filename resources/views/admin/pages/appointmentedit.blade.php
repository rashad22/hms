@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Appointment Info</h2>
        <div class="block">
<form action="{{Route('appointmentupdate')}}/{{ $appointment->id}}" method="post" name="id">
            @csrf
             <table class="form">
                 <tr>
                 <td>
                 <label>Appointment Date</label>
             </td>
             <td>
               <input type="text" name="appointmentdate" value="{{ $appointment->appointmentdate }}"  class="medium"/>
             </td>
       </tr>
             <tr>
               <td>
                 <label>Branch</label>
           </td>
           <td>
                 <input type="text" name="branch" value="{{ $appointment->branch }}"  class="medium"/>
             </td>
        </tr>
                 <tr>
                 <td>
                 <label>Speciality</label>
             </td>
             <td>
                 <input type="text" name="speciality" value="{{ $appointment->speciality}}"  class="medium"/>
             </td>
                 </tr>
                 <tr>
                 <td>
                 <label>Doctor</label>
             </td>
             <td>
                 <input type="text" name="doctor" value="{{ $appointment->doctor}}" class="medium"/>
             </td>
                 </tr>

                <tr>
             <td>
                 <label>Shift</label>
             </td>
             <td>
               <input type="text" name="shift" value="{{ $appointment->shift}}" class="medium"/>

             </td>
         </tr>
                <tr>
             <td>
                 <label>Patient Name</label>
             </td>
             <td>
               <input type="text" name="name" value="{{ $appointment->name}}" class="medium"/>

             </td>
         </tr>
                <tr>
             <td>
                 <label>Patient Mobile</label>
             </td>
             <td>
               <input type="text" name="mobile" value="{{ $appointment->mobile}}" class="medium"/>
             </td>
         </tr>
                <tr>
             <td>
                 <label>Patient Address</label>
             </td>
             <td>
               <input type="text" name="address" value="{{ $appointment->address}}" class="medium"/>
             </td>
         </tr>
                <tr>
             <td>
                 <label>Patient Age</label>
             </td>
             <td>
               <input type="text" name="age" value="{{ $appointment->age}}" class="medium"/>
             </td>
         </tr>
       <tr>
        <td>
            <label>Gender</label>
             </td>
             <td>
                  <input type="text" name="gender" value="{{$appointment->gender}}" class="medium"/>
             </td>
         </tr>
         <tr>
             <td>
                 <input type="submit" name="submit" Value="Update" class="btn btn-success" />
             </td>
         </tr>
             </table>
             </form>

        </div>
    </div>
</div>

@include ('admin.layouts.footer')
