<?php
class EmploymentDepartmentData
{

    static function addEmploymentDepartment(array $employmentDepartment)
    {
        $response=  selectFromTable("employment_department","*","employmentDepartment =?",[$employmentDepartment['employmentDepartment']],"one");
        if ( $response['status']) {
            return ["status" => false, "employmentDepartment" => translate("errorEmploymentDepartmentAlreadyExists")];
        }  
        global $imgEmploymentDepartment;
         $erorrs=uploadImage($_FILES['employmentDepartmentImage'],$imgEmploymentDepartment);
          if($erorrs['errorImage']==null)
          { 
            $employmentDepartment['image']=$erorrs['image'];
           
            
             return insertToTable("employment_department",$employmentDepartment);}
             else {
                return ["status" => false, "errorImage" => $erorrs['errorImage']];
             }
    }

    static function fetchAllEmploymentDepartment (){
        return (selectFromTable("employment_department"))['data'];
    }
    static function fetchEmploymentDepartmentById ($id){
        return selectFromTable("employment_department","*","id=?",[$id],"one");
}
    static function  updateEmploymentDepartment( array $employmentDepartment){
        $response=  selectFromTable("employment_department","*","employmentDepartment =? AND id!=?",[$employmentDepartment['employmentDepartment'],$employmentDepartment['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "errorEmploymentDepartment" => translate("errorEmploymentDepartmentAlreadyExists")];
        }
        
        global $imgEmploymentDepartment;
        $erorrs=uploadImage($_FILES['employmentDepartmentImage'],$imgEmploymentDepartment);  

         if($erorrs['errorImage']==null)
         { 
            
           deleteImage($imgEmploymentDepartment,$employmentDepartment['image']);
           $employmentDepartment['image']=$erorrs['image'];
         return  UpdateToTable("employment_department",$employmentDepartment,"id=?",[$employmentDepartment['id']]);
       }
            else {
                if(empty($_FILES['employmentDepartmentImage']['name'])){
                    $response=  UpdateToTable("employment_department", $employmentDepartment,"id=?",[$employmentDepartment['id']]);
                    if(!$response['status']){
                        header("Location:?page=index");
                        exit;
                    
                  }
                }
                
               return ["status" => false, "errorImage" => $erorrs['errorImage']];
            }
      
     
    }
      static function  deleteEmploymentDepartment($id){
        return   deleteFromTable("employment_department","id=? AND id!=?",[$id,1]);
    }
    static function updateEmploymentDepartmentPermissions(array $permissions,$id){
         return UpdateToTable("employment_department",$permissions,"id =?",[$id]); 
    }

}