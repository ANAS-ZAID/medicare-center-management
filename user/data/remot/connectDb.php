<?php

include $funFilterRequist;
include $funGetOldData;
include $funShowAlertError;
include $functionsHandilingDb;
include $funcWords;
include $funcDisblayedOrHied;
include $funDisplayGroupIcons;
include $funHandlingImages;
include $funDisplayDashPordCard;
global  $con;

try {
    $con = new PDO('mysql:host=localhost; dbname=center_mohammed_sinan', 'root', '', [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    ]);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 

} catch (PDOException $e) {
    echo 'Server Is Not Found';
}