<?php 
function getOldData($name){
if (isset($_POST[$name])&&!empty($_POST[$name])) {
    return $_POST[$name];
}else{
    return '';
}
    
}