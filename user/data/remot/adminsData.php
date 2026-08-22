<?php
class AdminsData
{

    static function addAdmin($name, $email, $password)
    {
        $response=  selectFromTable("admins","*","email =?",[$email],"one");
        if ( $response['status']) {
            return ["status" => false, "email" => translate("errorEmailAlreadyExists")];
        }
        $admin=new Admin($name,$email,$password);
             return insertToTable("admins", ['name'=>$name, "email"=>$email,"password"=> $password]);
    }

    static function fetchAllAdmins (){
        return (selectFromTable("admins"))['data'];
    }
    static function fetchAdminById ($id){
        return selectFromTable("admins","*","id=?",[$id],"one");
}
    static function  updateAdmin( array $admin){
        $response=  selectFromTable("admins","*","email =? AND id!=?",[$admin['email'],$admin['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "email" => translate("errorEmailAlreadyExists")];
        }
      $response=  UpdateToTable("admins",$admin,"id=?",[$admin['id']]);
      return $response;
     
    }
      static function  deleteAdmin($id){
        return   deleteFromTable("admins","id=? And isAdmin!=?",[$id,1]);
    }
    static function updateAdminPermissions(array $permissions,$id){
         return UpdateToTable("admins",$permissions,"id =?",[$id]); 
    }

}