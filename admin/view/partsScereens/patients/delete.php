<?php  PatientsController::deletePatient($_GET['id']);
  header("Location:?page=index");
  exit;