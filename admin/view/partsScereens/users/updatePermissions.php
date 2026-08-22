<?php  
    if (fileetrRequest("registerStatus", "get") !=null) {
        UsersController::updateUserPermissions(array("registerStatus" =>fileetrRequest("registerStatus", "get")),fileetrRequest("id", "get"));
         }