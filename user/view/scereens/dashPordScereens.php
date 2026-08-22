<?php
ob_start();
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}


if (isset($_SESSION["authUser"])) {
    chdir(dirname(__DIR__, 3));
    $path = "";
    include __DIR__ . "/../../../root.php";
    $GLOBALS["pageName"] = "shop";
    $GLOBALS["pageIcon"] = "chart-pie";
    $GLOBALS["navBarName"] = "dashboard";
    $GLOBALS["navBarIcon"] = "chart-pie";

} else {
    header("Location:../../$indexScereens");
    exit;
}
?>
<main class="mainBody d-flex">
    <?php

    include $saidBar ?>
    <section class="mainContent">
        <?php

        include $topBar ?>
        <div class="content">
            <?php


            include $headerNavBar ?>

            <li class="nav-item">
                <a href="#" class="nav-link activ" aria-current="page">Home</a>
            </li>

            <?php include $footerNavBar ?>
        </div>
        <div class="row">
            <?php displayCard("users-cog","admins"  ,translate("admins"),$adminsScereens ); ?>
            <?php displayCard(table: "users", icon: "users", title: translate("users"),href:$usersScereens ); ?>
            <?php displayCard(table: "patients", icon: "user-injured", title: translate("patients"),href:$patientsScereens); ?>
            <?php displayCard(table: "services", icon: "first-aid", title: translate("services"),href:$servicesScereens); ?>
            <?php displayCard(table: "employment_department", icon: "user-tag", title: translate("employmentDepartment"),href:$employmentDepartmentScereens); ?>
            <?php displayCard(table: "employees", icon: "user-doctor", title: translate("employees"),href:$employeesScereens); ?>
            <?php displayCard(table: "reservations", icon: "calendar-check", title: translate("reservations"),href:$reservationsScereens); ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="m-4">
                    <?php echo translate("last") . translate("reservations"); ?>
                </h3>

                <?php
                $allReservations = selectFromTable("reservations", limit: "10")['data'];
                $displayButton = false;
                include $reservationTable ?>
            </div>
        </div>
        <div class="row">


            <div class="col-lg-6">
                <h3 class="m-4">
                    <?php echo translate("last") . translate("admins"); ?>
                </h3>
                <?php
                $allAdmins = selectFromTable("admins", limit: "10")['data'];
                include $adminTable ?>
            </div>
            <div class="col-lg-6">
                <h3 class="m-3">
                    <?php echo translate("last") . translate("users"); ?>
                </h3><?php
                $allUsers = selectFromTable("users", limit: "10")['data'];
                include $userTable
                    ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="m-4">
                    <?php echo translate("last") . translate("patients"); ?>
                </h3>
                <?php
                $allPatients = selectFromTable("patients", limit: "10")['data'];
                include $patientTable
                    ?>

            </div>
            <div class="col-lg-6">
                <h3 class="m-4">
                    <?php echo translate("last") . translate("services"); ?>
                </h3>
                <?php
                $allServices = selectFromTable("services", limit: "10")['data'];
                include $serviceTable
                    ?>
            </div>
        </div>

        <div style="width:70%;margin:10px auto">
            <h3 class="m-4">
                <?php echo translate("last") . translate("employees"); ?>
            </h3>
            <?php
            $allEmployees = selectFromTable("employees", limit: "10")['data'];
            include $employeeTable
                ?>
        </div>

    </section>
</main>
<?php
include $footer;
?>