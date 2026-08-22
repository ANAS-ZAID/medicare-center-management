<?php
$GLOBALS["pageName"] = translate("employees");
$GLOBALS["pageIcon"] = "user-doctor";
include $employeesData;
include $employeesModel;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("employees");
    $GLOBALS["navBarIcon"] = "user-doctor";
    include $scerennIndexEmployees;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addEmployee");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddEmployees
;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateEmployee");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateEmployees
;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteEmployees
;
}
elseif (fileetrRequest("page", "get") == "permissions") {
   
    include $updateEmployeePermissions
;
}
else {
    header("Location:?page=index");
    exit;

}

class EmployeesController
{


    static function addEmployee($idDep,$name, $phone,$saivi,$address,$visibility,$ordering,$image)
    {
       $erorrs = EmployeesController::validateEmployeesData($name,$phone);
      
       

        if (empty($erorrs)) {
         $employeesData=["id_dep"=>$idDep,"name"=>$name,"phone"=> $phone,"saivi"=>$saivi,"address"=>$address,"visibility"=>$visibility,"ordering"=>$ordering,"image"=>$image];
            $responsData = EmployeesData::addEmployee($employeesData);
        
         if (!$responsData['status']) {
             if (isset($responsData['phone'])) {
                $erorrs['phone'] = $responsData['phone'];
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
    static function updateEmployee($id,$idDep,$name, $phone,$saivi,$address,$visibility,$ordering,$image)
    {
       $erorrs = EmployeesController::validateEmployeesData($name,$phone);
      
       

        if (empty($erorrs)) {
          
         $employeesData=["id"=>$id,"id_dep"=>$idDep,"name"=>$name,"phone"=> $phone,"saivi"=>$saivi,"address"=>$address,"visibility"=>$visibility,"ordering"=>$ordering,"image"=>$image];

      
             $responsData = EmployeesData::updateEmployee($employeesData);}

            if (!$responsData['status']) {
             if (isset($responsData['phone'])) {
                $erorrs['phone'] = $responsData['phone'];
             }
             if (isset($responsData['message'])) {
                $erorrs['message'] = $responsData['message'];
             }
            } else {
                header("Location:?page=index");
                exit;
            }
        

        return $erorrs;

    }
    static function validateEmployeesData($name, $phone,){

        $erorrs = [];

        if (empty($name)) {
            $erorrs['employeeName'] = translate('errorEmpty');

        }
        if (empty($phone)) {
            $erorrs['phone'] = translate('errorEmpty');

        }
        
    return $erorrs;
    }
    static function fetchAllEmployees()
    {

        return EmployeesData::fetchAllEmployees();
    }
    static function fetchEmployeeById($id)
    {

        return EmployeesData::fetchEmployeeById($id);
    }
    static function deleteEmployee($id)
    {

        return EmployeesData::deleteEmployee($id);
    }
    static function updateEmployeePermissions(array $permissions,string $id)
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
           $responsData =EmployeesData::updateEmployeePermissions($columnAndValue,$id);
  

        }
           header("Location:?page=index");
           exit;
    }
    
   
}