<?php 
function showAlertError($message) {

if (!empty($message)&&$message!=null) {
 echo '<div class="alert alert-danger">'.$message.'</div>';
}
    
}