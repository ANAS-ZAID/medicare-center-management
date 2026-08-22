<?php
ob_start();
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


if (isset($_SESSION["authUser"])) {
chdir(dirname(__DIR__, 3));
$path = "";
include __DIR__ . "/../../../root.php";
include $patientsController;


include $footer;


}
else{

    header("Location:../../$indexScereens");
    exit;
}
?>