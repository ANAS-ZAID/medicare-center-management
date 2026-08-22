<?php
$GLOBALS["pageName"] = translate("services");
$GLOBALS["pageIcon"] = "user";

include $servicesData;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("services");
    $GLOBALS["navBarIcon"] = "first-aid";
    include $scerennIndexService;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addService");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddService;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateService");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateService;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteService;
}elseif (fileetrRequest("page", "get") == "permissions") {

  include $updateServicePermissions;
 
}
else {
    header("Location:?page=index");
    exit;

}

class ServicesController
{


    static function handilngDataService($service, $ordering,  $visibility,$allowAds,$discription,$image=null,$id=0,$typeProsses="add")
    {
       $erorrs = ServicesController::validateServiceData($service);
      
       $serviceData=["service"=>$service,"ordering"=>$ordering,"visibility"=>$visibility,"allowAds"=>$allowAds,"discription"=>$discription,"image"=>$image];

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { $responsData = ServicesData::addService($serviceData);}
           if($typeProsses=="update")
           {$serviceData["id"]=$id;
             $responsData = ServicesData::updateService($serviceData);
            
            
            }
              
            if (!$responsData['status']) {
             if (isset($responsData['service'])) {
                $erorrs['service'] = $responsData['service'];
             }
             if (isset($responsData['message'])) {
                $erorrs['message'] = $responsData['message'];
             }
            } else {
                header("Location:?page=index");
                exit;
            }
        }

        return $erorrs;

    }
    static function validateServiceData($service){

        $erorrs = [];

        if (empty($service)) {
            $erorrs['serviceName'] = translate('errorEmpty');

        }
       
    return $erorrs;
    }
    static function fetchAllServices()
    {

        return ServicesData::fetchAllServices();
    }
    static function fetchServicerById($id)
    {

        return ServicesData::fetchServiceById($id);
    }
    static function deleteService($id)
    {

        return ServicesData::deleteService($id);
    }
    
    static function updateServicePermissions(array $permissions,string $id)
    { 
      $columnAndValue= array();
      
  //  $permissions[array_key_first($permissions)]=$permissions[array_key_first($permissions)]==1?0:1;
        foreach ($permissions as $key => $val) 
        {
                if( $val==0)
                 {   
                        $columnAndValue[$key]=1;
                 }elseif ($val==1) 
                 {
                    $columnAndValue[$key]=0;
            
                }   
         }
           if(!empty($columnAndValue)&&$id>0) {
           $responsData =ServicesData::updateServicePermissions($columnAndValue,$id);
  

        }
           header("Location:?page=index");
           exit;
    }
 
}


// class UserModel{
//     public $id=0;
//     function d(){
//          $id;
//         return $id;
//     }
// }







?>