<?php  
if (fileetrRequest("visibility", "get") !=null) {

      EmployeesController::updateEmployeePermissions(array("visibility" =>fileetrRequest("visibility", "get")),fileetrRequest("id", "get"));
}
    
   

      