<?php
global $pageName;
global $navBarIcon;
global $navBarName;
global $pageIcon;
//############--------- root path --------#################
if(isset($path)){

$supPath="view/";

}else{
    $path="../../";
$supPath="../";
}
$controllers =$path."controllers/";
$core =$path. "core/";
$view = "view/";
$data = $path."data/";

//############---------  core directory --------#################
$classes = $core . "classes/";
$functions = $core . "functions/";
$languages = $core . "languages/";
$sheardsCore= $core . "sheards/";
//############---------  data directory --------#################
$remot = $data . "remot/";
$models=$data."model/";


//############---------  view directory --------#################
$scereens = "scereens/";
$layouts = $supPath."layouts/";
$lib = $layouts . "lib/";
$img = $layouts . "img/";
$sheardsView = $supPath."sheards/";
$partsScereens="../partsScereens/";

$imgServices=$img."services/";
$imgEmployees=$img."employeess/";
$imgEmploymentDepartment=$img."employmentDepartment/";
//############--------- partsScereens directory --------#################
$partsScereensUsers=$partsScereens."users/";
$partsScereensaAdmins=$partsScereens."admins/";
$partsScereensReservations=$partsScereens."reservations/";
$partsScereensPatients=$partsScereens."patients/";
$partsScereensEmploymentDepartments=$partsScereens."employmentDepartment/";
$partsScereensServices=$partsScereens."services/";
$partsScereensEmployeess=$partsScereens."employees/";

$failsRoot=$sheardsCore."failsRoot.php";

include $failsRoot;
include $lang;
include $connectDb;
include $header;