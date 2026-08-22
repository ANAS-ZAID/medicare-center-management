<?php  EmployeesController::deleteEmployee($_GET['id']);
  header("Location:?page=index");
  exit;