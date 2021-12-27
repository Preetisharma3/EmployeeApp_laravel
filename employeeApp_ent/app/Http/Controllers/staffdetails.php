<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\PatientDetail;
use Illuminate\Http\Request;

use App\Models\staffs;
use App\Models\patientDetails;


class staffdetails extends Controller


{
    //...................STAFF POST.........//

    function staffs(Request $req)
    {

        $staff = new staffs;
        $staff->firstname = $req->firstname;
        $staff->lastname = $req->lastname;
        $staff->email = $req->email;
        $staff->address = $req->address;
        $staff->roles = $req->roles;
        $staff->contact = $req->contact;
        $staff->city = $req->city;
        $staff->state = $req->state;
        $staff->specialization = $req->specialization;
        $staff->gender = $req->gender;
        $staff->status = $req->status;
        $staff->save();
        echo "Data uploaded successfully";
        //  if($staff->save()){
        //     return "Data uploaded successfully";
        // }

    }



    // ..............GET STAFF API..............//

    public function staffGet()
    {

        return staffs::all();
    }
    // ................ DELETE STAFF API.........//
    public function deletestaff($id)
    {

        $data = staffs::where('id', $id)->delete();
        return  response()->json(['message' => 'Deleted Successfully']);
    }

// GET BY ID
function getstaffid($id)
{
    $data= staffs :: find($id) ;
    return $data;
}

    // ...........UPDATE STAFF............//

    public function updateStaff(Request $req, $id)
    {
        $data = staffs::find($id);
        $data->firstname      = $req->first_name;
        $data->lastname      = $req->last_name;
        $data->email          = $req->email;
        $data->address        = $req->address;
        $data->roles          = $req->roles;
        $data->city           = $req->city;
        $data->state          = $req->state;
        $data->specialization = $req->specialization;
        $data->contact        = $req->contact;
        $data->gender         = $req->gender;
        $data->status         = $req->status;
        $result               = $data->save();
        if ($result) {
            return response()->json(['message' => 'updated successfully']);
        }
    }







    // ...............POST  PATIENT API........................//

    function postPatient(Request $req)
    {

        $patient = new PatientDetail;
        $patient->first_name = $req->first_name;
        $patient->last_name = $req->last_name;
        $patient->contact_no = $req->contact_no;
        $patient->email = $req->email;

        $patient->address = $req->address;
        $patient->city = $req->city;
        $patient->pincode = $req->pincode;
        $patient->state = $req->state;
        $patient->dob = $req->dob;
        $patient->gender = $req->gender;
        $patient->patientProblem = $req->patientProblem;
        $patient->marital = $req->marital;

        $patient->save();
        return response()->json(['message' => 'Created Successfully']);
    }

    // ............GET PATIENT API.........//

    public function patientGet()
    {

        return PatientDetail::all();
    }

    // ....................DELETE PATIENT API...................//
    public function deletepatient($id)
    {

        $data = PatientDetail::where('id', $id)->delete();
        return  response()->json(['message' => 'Deleted Successfully']);
    }






    // .........PUT PATIENT API.........//

    public function updatepatient(Request $req, $id)
    {
        $data = PatientDetail::find($id);
        $data->first_name      = $req->first_name;
        $data->last_name      = $req->last_name;
        $data->contact_no          = $req->contact_no;
        $data->email        = $req->email;
        $data->address          = $req->address;
        $data->city           = $req->city;
        $data->pincode          = $req->pincode;
        $data->state = $req->state;
        $data->dob       = $req->dob;
        $data->gender         = $req->gender;
        $data->patientProblem        = $req->patientProblem;
        $data->marital       = $req->marital;
        $result               = $data->save();
        if ($result) {
            return response()->json(['message' => 'updated successfully!!']);
        }
    }












    // .............POST APPOINTMENT API.............//

    function postAppoinment(Request $req)
    {

        $patient = new appointment();
        $patient->patientName = $req->patientName;
        $patient->DoctorName = $req->DoctorName;
        $patient->contactNo = $req->contactNo;
        $patient->email = $req->email;

        $patient->address = $req->address;
        $patient->gender = $req->gender;
        $patient->symptoms = $req->symptoms;
        $patient->appointmentTime = $req->appointmentTime;
        $patient->appointmentDate = $req->appointmentDate;
        $patient->status = $req->status;











        $patient->save();
        return response()->json(['message' => 'Created Successfully']);
    }



    // ............. GET APPOINTMENT API............//

}
