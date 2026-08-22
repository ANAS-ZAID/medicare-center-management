<?php
$GLOBALS["pageName"] = translate("categories");
$GLOBALS["pageIcon"] = "category";

include $categoriesData;
if (fileetrRequest("page", "get") == "index") {
    $GLOBALS["navBarName"] = translate("categories");
    $GLOBALS["navBarIcon"] = "tags";
    include $scerennIndexCategory;
} elseif (fileetrRequest("page", "get") == "add") {
    $GLOBALS["navBarName"] =translate("addCategory");
    $GLOBALS["navBarIcon"] = "add";
    include $scereenAddCategory;
}elseif (fileetrRequest("page", "get") == "update") {
    $GLOBALS["navBarName"] = translate("updateCategory");
    $GLOBALS["navBarIcon"] = "edit";
    include $scereenUpdateCategory;
}
elseif (fileetrRequest("page", "get") == "delete") {
   
    include $scereenDeleteCategory;
}elseif (fileetrRequest("page", "get") == "permissions") {
   
  include $updateCategoryPermissions;
 
}
else {
    header("Location:?page=index");
    exit;

}

class CategoriesController
{


    static function handilngDataCategory($category, $ordering,  $visibility,$allowComments,$allowAds,$discription,$id=0,$typeProsses="add")
    {
       $erorrs = CategoriesController::validateCategoryData($category);
      
       $categoryData=["category"=>$category,"ordering"=>$ordering,"visibility"=>$visibility,"allowComments"=>$allowComments,"allowAds"=>$allowAds,"discription"=>$discription];

        if (empty($erorrs)) {
            if($typeProsses=="add")
           { $responsData = CategoriesData::addCategory($categoryData);}
           if($typeProsses=="update")
           {$categoryData["id"]=$id;
             $responsData = CategoriesData::updateCategory($categoryData);}

            if (!$responsData['status']) {
             if (isset($responsData['category'])) {
                $erorrs['category'] = $responsData['category'];
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
    static function validateCategoryData($category){

        $erorrs = [];

        if (empty($category)) {
            $erorrs['categoryName'] = translate('errorEmpty');

        }
       
    return $erorrs;
    }
    static function fetchAllCategories()
    {

        return CategoriesData::fetchAllCategories();
    }
    static function fetchCategoryrById($id)
    {

        return CategoriesData::fetchCategoryById($id);
    }
    static function deleteCategory($id)
    {

        return CategoriesData::deleteCategory($id);
    }
    
    static function updateCategoryPermissions(array $permissions,string $id)
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
           $responsData =CategoriesData::updateCategoryPermissions($columnAndValue,$id);
  

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