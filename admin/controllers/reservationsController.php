<?php
$GLOBALS["pageName"] = translate("reservations");
$GLOBALS["pageIcon"] = "user";

include $reservationsData;
include $reservationsModel;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("reservations");
    $GLOBALS["navBarIcon"] = "user-injured";
    include $scerennIndexReservation;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addReservation");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddReservation;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateReservation");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateReservation;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteReservation;
}
else {
    header("Location:?page=index");
    exit;

}


class ReservationsController
{


    static function addReservation($patientId,$doctorId,$status,$date)
    {//,$reservationType  $userId,,$createdAt;
        $userId=$_SESSION['auth']->id;
        $reservationType=translate("local");
        $createdAt=date("Y-m-d-h-i");
       $erorrs = ReservationsController::validateReservationsData($patientId,$doctorId,$status,$date);
        if (empty($erorrs)) {
         $ReservationsData=["userId"=>$userId,"patientId"=>$patientId,"doctorId"=>$doctorId,"reservationType"=>$reservationType,"status"=>$status,"createdAt"=>$createdAt,"date"=>$date];
            $responsData = ReservationsData::addReservation($ReservationsData);
        
         if (!$responsData['status']) {
           
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
    static function updateReservation($id,$patientId,$doctorId,$status,$date)
    {
       $erorrs = ReservationsController::validateReservationsData($patientId,$doctorId,$status,$date);
      
       

        if (empty($erorrs)) {
          
         $reservationsData=["id"=>$id,"patientId"=>$patientId,"doctorId"=>$doctorId,"status"=>$status,"date"=>$date];

      
             $responsData = ReservationsData::updateReservation($reservationsData);}

            if (!$responsData['status']) {
           
             if (isset($responsData['message'])) {
                $erorrs['message'] = $responsData['message'];
             }
            } else {
                header("Location:?page=index");
                exit;
            }
        

        return $erorrs;

    }
    static function validateReservationsData($patientId,$doctorId,$status,$date){

        $erorrs = [];

        if (empty($patientId)) {
            $erorrs['patientId'] = translate('errorEmpty');

        }  if (empty($doctorId)) {
            $erorrs['doctorId'] = translate('errorEmpty');

        }
        
        if (empty($status)) {
            $erorrs['status'] = translate('errorEmpty');

        }
        if (empty($date)) {
            $erorrs['date'] = translate('errorEmpty');

        }
        
    return $erorrs;
    }
    static function fetchAllReservations()
    {

        return ReservationsData::fetchAllReservations();
    }
    static function fetchReservationById($id)
    {

        return ReservationsData::fetchReservationById($id);
    }
    static function deleteReservation($id)
    {

        return ReservationsData::deleteReservation($id);
    }
   
    
   
}