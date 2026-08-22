<?php
ob_start();
session_start();


if (isset($_SESSION["auth"])) {
include "../../root.php";
include $adminsController;


include $footer;


}
else{

    header("Location:../../$indexScereens");
    exit;
}
?>