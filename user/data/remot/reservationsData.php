<?php
class ReservationsData
{

    static function addReservation($reservation)
    {
      
       
             return insertToTable("reservations", $reservation);
    }

    static function fetchAllReservations (){
        return (selectFromTable("reservations"))['data'];
    }
    static function fetchReservationById ($id){
        return selectFromTable("reservations","*","id=?",[$id],"one");
}
    static function  updateReservation( array $reservation){
  
       
      $response=  UpdateToTable("reservations",$reservation,"id=?",[$reservation['id']]);
      return $response;
     
    }
      static function  deleteReservation($id){
        return   deleteFromTable("reservations","id=?",[$id]);
    }
   

}