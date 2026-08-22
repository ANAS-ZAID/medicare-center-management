<?php
class ServicesData
{

    static function addService(array $service)
    {
        $response=  selectFromTable("services","*","service =?",[$service['service']],"one");
        if ( $response['status']) {
            return ["status" => false, "service" => translate("errorServiceAlreadyExists")];
        }  
        global $imgServices;
         $erorrs=uploadImage($_FILES['serviceImage'],$imgServices);
          if($erorrs['errorImage']==null)
          { 
            $service['image']=$erorrs['image'];
           
            
             return insertToTable("services",$service);}
             else {
                return ["status" => false, "errorImage" => $erorrs['errorImage']];
             }
    }

    static function fetchAllServices (){
        return (selectFromTable("services"))['data'];
    }
    static function fetchServiceById ($id){
        return selectFromTable("services","*","id=?",[$id],"one");
}
    static function  updateService( array $service){
        $response=  selectFromTable("services","*","service =? AND id!=?",[$service['service'],$service['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "errorService" => translate("errorServiceAlreadyExists")];
        }
        
        global $imgServices;
        $erorrs=uploadImage($_FILES['serviceImage'],$imgServices);  

         if($erorrs['errorImage']==null)
         { 
            
           deleteImage($imgServices,$service['image']);
           $service['image']=$erorrs['image'];
         return  UpdateToTable("services",$service,"id=?",[$service['id']]);
       }
            else {
                if(empty($_FILES['serviceImage']['name'])){
                    $response=  UpdateToTable("services", $service,"id=?",[$service['id']]);
                    if($response['status']){
                        header("Location:?page=index");
                        exit;
                    
                  }
                }
                
               return ["status" => false, "errorImage" => $erorrs['errorImage']];
            }
      
     
    }
      static function  deleteService($id){
        return   deleteFromTable("services","id=?",[$id]);
    }
    static function updateServicePermissions(array $permissions,$id){
         return UpdateToTable("services",$permissions,"id =?",[$id]); 
    }

}