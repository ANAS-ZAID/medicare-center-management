<?php
$GLOBALS["pageName"] = translate("patients");
$GLOBALS["pageIcon"] = "user";

include $patientsData;
include $patientModel;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("patients");
    $GLOBALS["navBarIcon"] = "user-injured";
    include $scerennIndexPatient;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addPatient");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddPatient;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updatePatient");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdatePatient;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeletePatient;
}
else {
    header("Location:?page=index");
    exit;

}

class PatientsController
{


    static function handilngDataPatient($name, $phone,$id=0,$typeProsses="add")
    {
       $erorrs = PatientsController::validatePatientData($name,$phone,$typeProsses);
      
       

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { 
            $Patient=new Patient($name,$phone);
            
            $responsData = PatientsData::addPatient($name, $phone);}
           if($typeProsses=="update")
           {
             $responsData = PatientsData::updatePatient(["id"=>$id,"name"=>$name,"phone"=> $phone]);}

            if (!$responsData['status']) {
             if (isset($responsData['phone'])) {
                $erorrs['phone'] = $responsData['phone'];
             }
             if (isset($responsData['message'])) {
                $erorrs['message'] = $responsData['message'];
             }
            } else {
                header("Location:?page=index");
                exit;
            }
        }

        return $erorrs;

    }
    static function validatePatientData($name, $phone,$typeProsses="add"){

        $erorrs = [];

        if (empty($name)) {
            $erorrs['patientName'] = translate('errorEmpty');

        }
        if (empty($phone)) {
            $erorrs['phone'] = translate('errorEmpty');

        }
        
    return $erorrs;
    }
    static function fetchAllPatients()
    {

        return PatientsData::fetchAllPatients();
    }
    static function fetchPatientById($id)
    {

        return PatientsData::fetchPatientById($id);
    }
    static function deletePatient($id)
    {

        return PatientsData::deletePatient($id);
    }
    
   
}