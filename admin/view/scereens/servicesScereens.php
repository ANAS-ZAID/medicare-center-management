<?php
ob_start();
session_start();


if (isset($_SESSION["auth"])) {
include "../../root.php";
include $servicesController;

include $footer;


}
else{

    header("Location:../../$indexScereens");
    exit;
}
?>