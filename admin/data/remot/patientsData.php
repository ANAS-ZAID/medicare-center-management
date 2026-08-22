<?php
class PatientsData
{

    static function addPatient($name, $phone)
    {
        $response=  selectFromTable("patients","*","phone =?",[$phone],"one");
        if ( $response['status']) {
            return ["status" => false, "phone" => translate("errorPhonelAlreadyExists")];
        }
        $Patient=new Patient($name,$phone);
             return insertToTable("Patients", ['name'=>$name, "phone"=>$phone]);
    }

    static function fetchAllPatients (){
        return (selectFromTable("patients"))['data'];
    }
    static function fetchPatientById ($id){
        return selectFromTable("patients","*","id=?",[$id],"one");
}
    static function  updatePatient( array $patient){
        print_r($patient);
        $response=  selectFromTable("patients","*","phone =? AND id!=?",[$patient['phone'],$patient['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "phone" => translate("errorPhonelAlreadyExists")];
        }
      $response=  UpdateToTable("patients",$patient,"id=?",[$patient['id']]);
      return $response;
     
    }
      static function  deletePatient($id){
        return   deleteFromTable("patients","id=?",[$id]);
    }
   

}