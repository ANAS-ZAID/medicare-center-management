<?php
$GLOBALS["pageName"] = translate("employmentsDepartments");
$GLOBALS["pageIcon"] = "user";
include $employmentDepartmentData;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("employmentsDepartments");
    $GLOBALS["navBarIcon"] = "first-aid";
    include $scerennIndexEmploymentDepartment;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addEmploymentDepartment");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddEmploymentDepartment;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateEmploymentDepartment");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateEmploymentDepartment;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteEmploymentDepartment;
}
else {
    header("Location:?page=index");
    exit;

}


class EmploymentDepartmentController
{

    
    static function handilngDataEmploymentDepartment($employmentDepartment,$discription,$image=null,$id=0,$typeProsses="add")
    {
       $erorrs = EmploymentDepartmentController::validateEmploymentDepartmentData($employmentDepartment);
      
       $employmentDepartmentData=["employmentDepartment"=>$employmentDepartment,"discription"=>$discription,"image"=>$image];

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { $responsData = EmploymentDepartmentData::addEmploymentDepartment($employmentDepartmentData);}
           if($typeProsses=="update")
           {$employmentDepartmentData["id"]=$id;
             $responsData = EmploymentDepartmentData::updateEmploymentDepartment($employmentDepartmentData);
            
            
            }
              
            if (!$responsData['status']) {
             if (isset($responsData['EmploymentDepartment'])) {
                $erorrs['EmploymentDepartment'] = $responsData['EmploymentDepartment'];
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
    static function validateEmploymentDepartmentData($employmentDepartment){

        $erorrs = [];

        if (empty($employmentDepartment)) {
            $erorrs['EmploymentDepartmentName'] = translate('errorEmpty');

        }
       
    return $erorrs;
    }
    static function fetchAllEmploymentDepartment()
    {

        return EmploymentDepartmentData::fetchAllEmploymentDepartment();
    }
    static function fetchEmploymentDepartmentrById($id)
    {

        return EmploymentDepartmentData::fetchEmploymentDepartmentById($id);
    }
    static function deleteEmploymentDepartment($id)
    {

        return EmploymentDepartmentData::deleteEmploymentDepartment($id);
    }
    
    static function updateEmploymentDepartmentPermissions(array $permissions,string $id)
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
           $responsData =EmploymentDepartmentData::updateEmploymentDepartmentPermissions($columnAndValue,$id);
  

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