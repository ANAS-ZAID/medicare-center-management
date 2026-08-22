<?php
$GLOBALS["pageName"] = translate("admins");
$GLOBALS["pageIcon"] = "user";

include $adminsData;
include $adminModel;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("admins");
    $GLOBALS["navBarIcon"] = "users-cog";
    include $scerennIndexAdmin;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addAdmin");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddAdmin;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateAdmin");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateAdmin;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteAdmin;
}elseif (fileetrRequest("page", "get") == "permissions") {
   
  include $updateAdminPermissions;
 
}
else {
    header("Location:?page=index");
    exit;

}

class AdminsController
{


    static function handilngDataAdmin($name, $email, $password, $confairmPassword,$id=0,$typeProsses="add")
    {
       $erorrs = AdminsController::validateAdminData($name,$email,$password,$confairmPassword,$typeProsses);
      
       

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { 
            $admin=new Admin($name,$email,sha1($password));
            
            $responsData = AdminsData::addAdmin($name, $email, sha1($password));}
           if($typeProsses=="update")
           {
             $responsData = AdminsData::updateAdmin(["id"=>$id,"name"=>$name,"email"=> $email,"password"=> $password]);}

            if (!$responsData['status']) {
             if (isset($responsData['email'])) {
                $erorrs['email'] = $responsData['email'];
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
    static function validateAdminData($name, $email, $password, $confairmPassword,$id=0,$typeProsses="add"){

        $erorrs = [];

        if (empty($name)) {
            $erorrs['adminName'] = translate('errorEmpty');

        }
        if (empty($email)) {
            $erorrs['email'] = translate('errorEmpty');

        }
        if($typeProsses=="add") {
        if (empty($password)) {
            $erorrs['password'] = translate('errorEmpty');

        }elseif (empty($confairmPassword)) {
            $erorrs['confairmPassword'] = translate('errorEmpty');

        }
        
    }
     if ($password != $confairmPassword) {
        $erorrs['confairmPassword'] = translate('errorPasswordDoesNotMatch');
    }
    return $erorrs;
    }
    static function fetchAllAdmins()
    {

        return AdminsData::fetchAllAdmins();
    }
    static function fetchAdminById($id)
    {

        return AdminsData::fetchAdminById($id);
    }
    static function deleteAdmin($id)
    {

        return AdminsData::deleteAdmin($id);
    }
    
    static function updateAdminPermissions(array $permissions,string $id)
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
           $responsData =AdminsData::updateAdminPermissions($columnAndValue,$id);
  

        }
        if(isset($_GET['dashPord']))
         {  header("Location:{$_GET['dashPord']}");
           exit;}else{
            header("Location:?page=index");
           exit;
           }
    }
 
}