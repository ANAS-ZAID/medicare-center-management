<?php
class UsersData
{

    static function addUser($name, $email, $password)
    {
        $response=  selectFromTable("users","*","email =?",[$email],"one");
        if ( $response['status']) {
            return ["status" => false, "email" => translate("errorEmailAlreadyExists")];
        }
             return insertToTable("users", ['name'=>$name, "email"=>$email,"password"=> $password]);
    }

    static function fetchAllUsers (){
        return (selectFromTable("users"))['data'];
    }
    static function fetchUserById ($id){
        return selectFromTable("users","*","id=?",[$id],"one");
}
    static function  updateUser( array $user){
        $response=  selectFromTable("users","*","email =? AND id!=?",[$user['email'],$user['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "email" => translate("errorEmailAlreadyExists")];
        }
      $response=  UpdateToTable("users",$user,"id=?",[$user['id']]);
      return $response;
     
    }
      static function  deleteUser($id){
        return   deleteFromTable("users","id=?",[$id]);
    }
    static function updateUserPermissions(array $permissions,$id){
         return UpdateToTable("users",$permissions,"id =?",[$id]); 
    }

}