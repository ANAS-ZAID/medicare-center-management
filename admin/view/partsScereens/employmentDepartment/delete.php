<?php 
if(!$_GET['id']==1)
EmploymentDepartmentController::deleteEmploymentDepartment($_GET['id']);
  header("Location:?page=index");
  exit;