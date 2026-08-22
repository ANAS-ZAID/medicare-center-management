<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erorrs = PatientsController::handilngDataPatient(fileetrRequest("patientName"), fileetrRequest("phone"));
    
}


?>
<main class="mainBody d-flex">
    <?php include $saidBar ?>
    <section class="mainContent">
        <?php include $topBar ?>
        <div class="content">
            <?php include $headerNavBar ?>
            <li class="nav-item">
                <a href="?page=index" class="btn btn-primary btn-sm nav-link " aria-current="page">
                    <span> <?php echo translate("back")?></span>
                </a>
            </li>
            <?php include $footerNavBar ?>
            <form action="" method="post" class="form-handilng" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("patientName") ?></label>
                            <i class="fa fa-user fa-fw "> </i>
                            <input type="text" name="patientName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo getOldData('patientName');?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['patientName'])) {
                               showAlertError($erorrs['patientName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("phoneNumber") ?></label>
                            <i class="fa fa-phone fa-fw "> </i>
                            <input type="tel" name="phone" minlength="9" maxlength="9" autocomplete="off" required
                                autofocus class="form-control" value="<?php echo getOldData('phone');?>">
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['phone'])) {
                               showAlertError($erorrs['phone']);
                            }
                           ?>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-2  p-2 fs-6">
                            <?php echo translate("add") ?>
                        </button>
                    </div>
                </div>


        </div>
        </form>
        </div>
    </section>
</main>