<?php  
if (fileetrRequest("visibility", "get") !=null) {

      CategoriesController::updateCategoryPermissions(array("visibility" =>fileetrRequest("visibility", "get")),fileetrRequest("id", "get"));
}
    
   
    if (fileetrRequest("allowComments", "get") !=null) {
        CategoriesController::updateCategoryPermissions(array("allowComments" =>fileetrRequest("allowComments", "get")),fileetrRequest("id", "get"));
         }
      if (fileetrRequest("allowAds", "get") !=null) {

        CategoriesController::updateCategoryPermissions(array("allowAds" =>fileetrRequest("allowAds", "get")),fileetrRequest("id", "get"));
      } 