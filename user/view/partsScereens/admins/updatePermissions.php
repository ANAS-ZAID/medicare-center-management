<?php  
if (fileetrRequest("isAdmin", "get") !=null) {

      AdminsController::updateAdminPermissions(array("isAdmin" =>fileetrRequest("isAdmin", "get")),fileetrRequest("id", "get"));
}
    
   
    if (fileetrRequest("registerStatus", "get") !=null) {
        AdminsController::updateAdminPermissions(array("registerStatus" =>fileetrRequest("registerStatus", "get")),fileetrRequest("id", "get"));
         }
      if (fileetrRequest("isSupAdmin", "get") !=null) {

        AdminsController::updateAdminPermissions(array("isSupAdmin" =>fileetrRequest("isSupAdmin", "get")),fileetrRequest("id", "get"));
      } 