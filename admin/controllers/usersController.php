<?php
$GLOBALS["pageName"] = translate("users");
$GLOBALS["pageIcon"] = "user";

include $usersData;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("users");
    $GLOBALS["navBarIcon"] = "users";
    
    include $scerennIndexUser;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addUser");
    $GLOBALS["navBarIcon"] = "add";
    
    include $scereenAddUser;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateUser");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateUser;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteUser;
}elseif (fileetrRequest("page", "get") == "permissions") {
   
  include $updateUserPermissions;
 
}
else {
   
    header("Location:?page=index");
    exit;

}

class UsersController
{


    static function handilngDataUser($name, $email, $password, $confairmPassword,$id=0,$typeProsses="add")
    {
       $erorrs = UsersController::validateUserData($name,$email,$password,$confairmPassword,$typeProsses);
      
       

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { $responsData = UsersData::addUser($name, $email, sha1($password));}
           if($typeProsses=="update")
           {
             $responsData = UsersData::updateUser(["id"=>$id,"name"=>$name,"email"=> $email,"password"=> $password]);}

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
    static function validateUserData($name, $email, $password, $confairmPassword,$id=0,$typeProsses="add"){

        $erorrs = [];

        if (empty($name)) {
            $erorrs['userName'] = translate('errorEmpty');

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
    static function fetchAllUsers()
    {

        return UsersData::fetchAllUsers();
    }
    static function fetchUserById($id)
    {

        return UsersData::fetchUserById($id);
    }
    static function deleteUser($id)
    {

        return UsersData::deleteUser($id);
    }
    
    static function updateUserPermissions(array $permissions,string $id)
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
           $responsData =UsersData::updateUserPermissions($columnAndValue,$id);
  

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