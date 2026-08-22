<?php
class EmployeesData
{

    static function addEmployee(array $employee)
    {
        $response=  selectFromTable("employees","*","name=?",[$employee['name']],"one");
        if ( $response['status']) {
            return ["status" => false, "employee" => translate("errorEmployeeAlreadyExists")];
        }  
        global $imgEmployees;
         $erorrs=uploadImage($_FILES['employeeImage'],$imgEmployees);
          if($erorrs['errorImage']==null)
            { 
              $employee['image']=$erorrs['image'];
              return insertToTable("employees",$employee);
             }
          else 
            {
                return ["status" => false, "errorImage" => $erorrs['errorImage']];
            }
    }

    static function fetchAllEmployees (){
        return (selectFromTable("employees"))['data'];
    }
    static function fetchEmployeeById ($id){
        return selectFromTable("employees","*","id=?",[$id],"one");
}
    static function  updateEmployee( array $employee){
        $response=  selectFromTable("employees","*","name =? AND id!=?",[$employee['name'],$employee['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "errorEmployee" => translate("erroremployeeAlreadyExists")];
        }
        
        global $imgEmployees;
        $erorrs=uploadImage($_FILES['employeeImage'],$imgEmployees);  

         if($erorrs['errorImage']==null)
         { 
            
           deleteImage($imgEmployees,$employee['image']);
           $employee['image']=$erorrs['image'];
         return  UpdateToTable("employees",$employee,"id=?",[$employee['id']]);
       }
            else {
                if(empty($_FILES['employeeImage']['name'])){
                    $response=  UpdateToTable("employees", $employee,"id=?",[$employee['id']]);
                   // if(!$response['status']){
                        header("Location:?page=index");
                        exit;
                    
                 //}
                }
                
               return ["status" => false, "errorImage" => $erorrs['errorImage']];
            }
      
     
    }
      static function  deleteEmployee($id){
        return   deleteFromTable("employees","id=?",[$id]);
    }
    static function updateEmployeePermissions(array $permissions,$id){
         return UpdateToTable("employees",$permissions,"id =?",[$id]); 
    }

}