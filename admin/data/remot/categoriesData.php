<?php
class CategoriesData
{

    static function addCategory(array $category)
    {
        $response=  selectFromTable("categories","*","category =?",[$category['category']],"one");
        if ( $response['status']) {
            return ["status" => false, "category" => translate("errorCategoryAlreadyExists")];
        }
             return insertToTable("categories",$category );
    }

    static function fetchAllCategories (){
        return (selectFromTable("categories"))['data'];
    }
    static function fetchCategoryById ($id){
        return selectFromTable("categories","*","id=?",[$id],"one");
}
    static function  updateCategory( array $category){
        $response=  selectFromTable("categories","*","category =? AND id!=?",[$category['category'],$category['id']],"one");
        if ( $response['status']) {
            return ["status" => false, "category" => translate("errorCategoryAlreadyExists")];
        }
      $response=  UpdateToTable("categories",$category,"id=?",[$category['id']]);
      return $response;
     
    }
      static function  deleteCategory($id){
        return   deleteFromTable("categories","id=?",[$id]);
    }
    static function updateCategoryPermissions(array $permissions,$id){
         return UpdateToTable("categories",$permissions,"id =?",[$id]); 
    }

}