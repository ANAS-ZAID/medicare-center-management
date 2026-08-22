<?php  
if (fileetrRequest("visibility", "get") !=null) {
  print("kllllll");
      ServicesController::updateServicePermissions(array("visibility" =>fileetrRequest("visibility", "get")),fileetrRequest("id", "get"));
}
      if (fileetrRequest("allowAds", "get") !=null) {

        ServicesController::updateServicePermissions(array("allowAds" =>fileetrRequest("allowAds", "get")),fileetrRequest("id", "get"));
      } 