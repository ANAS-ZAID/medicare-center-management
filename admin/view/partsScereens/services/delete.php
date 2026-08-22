<?php  ServicesController::deleteService($_GET['id']);
  header("Location:?page=index");
  exit;