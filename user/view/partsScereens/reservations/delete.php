<?php  ReservationsController::deleteReservation($_GET['id']);
  header("Location:?page=index");
  exit;