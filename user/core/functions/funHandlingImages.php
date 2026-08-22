<?php  
function uploadImage($file,$path){
$name= $file["name"];
$temp_path= $file["tmp_name"];
$size=$file["size"];
$date= date('y-m-d-h-s-m');
//
$allow_ext=array("jpg","png");
$ext1= explode(".", $name);   
$ext=end($ext1);
$ext=strtolower($ext);

if(empty($name)){
    return ["errorImage"=> translate("errorEmpty")] ;   
}elseif (!in_array($ext, $allow_ext)) {
   
    return ["errorImage"=> translate("errorExtention")]; 
}else
{
    if($size<3145728)
    {  
        $name=rand(1000,100000).$date.'.'.$ext;
        move_uploaded_file($temp_path, $path.$name);
        return ["errorImage"=> null,"image"=> $name];
    }
    else
    {       
         return ["errorImage"=> translate("errorSizeImage")];
    }   
}
 }
 function deleteImage($path,$ImageName){
    if(file_exists($path.$ImageName)){
        unlink($path.$ImageName);
    }else
    {
        return ["errorImage"=> translate("errorNotFound")];
    }
    }