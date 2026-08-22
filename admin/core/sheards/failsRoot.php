<?php
//###########---------- language file and connectDb ----------###########

$lang = $languages . "en.php";
$connectDb = "$remot/connectDb.php";

//###########---------- End language file and connectDb ----------###########

//###########---------- fails directory functions ---------###########

$funFilterRequist = $functions."funFilterRequist.php";
$funGetOldData= $functions."funGetOldData.php";
$funShowAlertError=$functions."funShowAlertError.php";
$functionsHandilingDb=$functions."functionsHandilingDb.php";
$funcWords=$functions."funcWords.php";
$funcDisblayedOrHied=$functions."funcDisblayedOrHied.php";
$funDisplayGroupIcons=$functions."funDisplayGroupIcons.php";
$funHandlingImages=$functions."funHandlingImages.php";
$funDisplayDashPordCard=$functions."funDisplayDashPordCard.php";
//###########---------- End directory functions ---------###########

//###########---------- File model ----------###########

$userModel=$models."user.php";
$adminModel=$models."admin.php";
$patientModel=$models."patient.php";
$servicesModel=$models."service.php";
$servicesModel=$models."service.php";
$employmentDepartmentModel=$models."employmentDepartment.php";
$employeesModel=$models."employees.php";
$reservationsModel=$models."reservations.php";
//###########---------- End file model ----------###########

//###########----------  fails  directory data remote ---------###########

$loginData = $remot . "loginData.php";
$categoriesData = $remot . "categoriesData.php";
$usersData = $remot . "usersData.php";
$adminsData = $remot . "adminsData.php";
$patientsData = $remot . "patientsData.php";
$servicesData = $remot . "servicesData.php";
$employmentDepartmentData = $remot . "employmentDepartmentData.php";
$employeesData = $remot . "employeesData.php";
$reservationsData = $remot . "reservationsData.php";
//###########----------  End  directory data remote ---------###########

//###########---------- fails directory controllers ---------###########

$loginController = $controllers . "loginController.php";
$categoriesController = $controllers . "categoriesController.php";
$usersController = $controllers . "usersController.php";
$adminsController = $controllers . "adminsController.php";
$patientsController = $controllers . "patientsController.php";
$servicesController = $controllers . "servicesController.php";

$employmentDepartmentController = $controllers . "employmentDepartmentController.php";
$employeesController = $controllers . "employeesController.php";
$reservationsController = $controllers . "reservationsController.php";
//###########---------- End directory controllers ---------###########

//###########---------- fails  directory view sheards  ---------###########

$header = $sheardsView . "appHeader.php";
$footer = $sheardsView . "footer.php";
$saidBar = $sheardsView . "saidBar.php";
$saidBar = $sheardsView . "saidBar.php";
$headerNavBar = $sheardsView . "headerNavBar.php";
$footerNavBar = $sheardsView . "footerNavBar.php";
$topBar = $sheardsView . "topBar.php";
$getAlert = $sheardsView . "getAlert.php";

//###########---------- end  directory view sheards  ---------###########

//###########----------  fails  directory screens ---------###########
global $dashPordScereens;
$indexScereens = "index.php";
$dashPordScereens = "dashPordScereens.php";
$adminsScereens = "adminsScereens.php";
$usersScereens = "usersScereens.php";
$patientsScereens = "patientsScereens.php";
$servicesScereens = "servicesScereens.php";
$employmentDepartmentScereens = "employmentDepartment.php";

$employeesScereens = "employees.php";
$reservationsScereens = "reservations.php";
//###########----------  end directory screens ---------###########




//@@@@@@@@@@@----------  directories directory partsScereens ---------@@@@@@@@@@@

//###########---------- fails directory partsScereensCategories ---------###########

$partsScereensCategories = $partsScereens . "categories/";
$scerennIndexCategory = $partsScereensCategories . "index.php";
$scereenAddCategory = $partsScereensCategories . "addCategory.php";
$scereenDeleteCategory = $partsScereensCategories . "deleteCategory.php";
$scereenUpdateCategory = $partsScereensCategories . "updateCategory.php";
$updateCategoryPermissions = $partsScereensCategories . "updatePermissions.php";

//###########---------- End directory partsScereensCategories ---------###########



//###########---------- fails directory partsScereensAdmins ---------###########

$scerennIndexAdmin=$partsScereensaAdmins."index.php";
$scereenAddAdmin=$partsScereensaAdmins."add.php";
$scereenDeleteAdmin=$partsScereensaAdmins."delete.php";
$scereenUpdateAdmin=$partsScereensaAdmins."update.php";
$updateAdminPermissions=$partsScereensaAdmins."updatePermissions.php";
$adminTable=$partsScereensaAdmins."displayTable.php";
//###########---------- fails directory partsScereensUsers ---------###########

$scerennIndexUser=$partsScereensUsers."index.php";
$scereenAddUser=$partsScereensUsers."add.php";
$scereenDeleteUser=$partsScereensUsers."delete.php";
$scereenUpdateUser=$partsScereensUsers."update.php";
$updateUserPermissions=$partsScereensUsers."updatePermissions.php";
$userTable=$partsScereensUsers."displayTable.php";
//###########---------- End directory partsScereensUsers ---------###########

//###########---------- fails directory partsScereensPatients ---------###########

$scerennIndexPatient=$partsScereensPatients."index.php";
$scereenAddPatient=$partsScereensPatients."add.php";
$scereenDeletePatient=$partsScereensPatients."delete.php";
$scereenUpdatePatient=$partsScereensPatients."update.php";
$updatePatientPermissions=$partsScereensPatients."updatePermissions.php";
$patientTable=$partsScereensPatients."displayTable.php";
//###########---------- End directory partsScereensPatients ---------###########

 //###########---------- fails directory partsScereensPatients ---------###########
 
$scerennIndexService=$partsScereensServices."index.php";
$scereenAddService=$partsScereensServices."add.php";
$scereenDeleteService=$partsScereensServices."delete.php";
$scereenUpdateService=$partsScereensServices."update.php";
$updateServicePermissions=$partsScereensServices."updatePermissions.php";
$serviceTable=$partsScereensServices."displayTable.php";
//###########---------- End directory partsScereensPatients ---------###########

 //###########---------- fails directory partsScereensPatients ---------###########
 
 $scerennIndexEmploymentDepartment=$partsScereensEmploymentDepartments."index.php";
 $scereenAddEmploymentDepartment=$partsScereensEmploymentDepartments."add.php";
 $scereenDeleteEmploymentDepartment=$partsScereensEmploymentDepartments."delete.php";
 $scereenUpdateEmploymentDepartment=$partsScereensEmploymentDepartments."update.php";
 //###########---------- End directory partsScereensPatients ---------###########
 //###########---------- fails directory partsScereensPatients ---------###########
 
 
 $scerennIndexEmployees=$partsScereensEmployeess."index.php";
 $scereenAddEmployees=$partsScereensEmployeess."add.php";
 $scereenDeleteEmployees=$partsScereensEmployeess."delete.php";

 $scereenUpdateEmployees=$partsScereensEmployeess."update.php";
 $updateEmployeePermissions=$partsScereensEmployeess."updatePermissions.php";
 $employeeTable=$partsScereensEmployeess."displayTable.php";
 //###########---------- End directory partsScereensPatients ---------###########
 
 //###########---------- fails directory partsScereensReservations ---------###########

$scerennIndexReservation=$partsScereensReservations."index.php";
$scereenAddReservation=$partsScereensReservations."add.php";
$scereenDeleteReservation=$partsScereensReservations."delete.php";
$scereenUpdateReservation=$partsScereensReservations."update.php";
$reservationTable=$partsScereensReservations."displayTable.php";

//###########---------- End directory partsScereensPatients ---------###########
//@@@@@@@@@@@----------  End directory partsScereens ---------@@@@@@@@@@@