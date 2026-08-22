<?php

$allReservations =  ReservationsController::fetchAllReservations();

?>

<main class="mainBody d-flex">
    <?php include $saidBar ?>
    <section class="mainContent">
        <?php include $topBar ?>
        <div class="content">
            <?php include $headerNavBar ?>
            <li class="nav-item">
                <a href="?page=add " class="btn btn-primary btn-sm nav-link " aria-current="page">
                    <i class="fa fa-add fa-fw">
                    </i>
                    <span> <?php echo translate("add") ?></span>
                </a>
            </li>
            <?php include $footerNavBar ?>
            <?php include $reservationTable ?>
        </div>
    </section>
</main>