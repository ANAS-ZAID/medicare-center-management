<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erorrs = ReservationsController::addReservation(fileetrRequest("patientId"), fileetrRequest("doctorId"), fileetrRequest("status"), fileetrRequest("date"));
 
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

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("patientName") ?></label>

                            <select name="patientId" class="form-control">
                                <?php foreach ((selectFromTable("patients")['data']) as $patient): ?>
                                <option value="<?php echo $patient->id?>"
                                    <?php echo getOldData('patientId')==$patient->id?"selected":'' ?>>
                                    <?php echo  $patient->name ?>

                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("doctorName") ?></label>

                            <select name="doctorId" class="form-control">
                                <?php foreach ((selectFromTable("employees",where:"id_dep=?",whereValues:[1])['data']) as $doctor): ?>
                                <option value="<?php echo $doctor->id?>"
                                    <?php echo getOldData('doctorId')==$doctor->id?"selected":'' ?>>
                                    <?php echo  $doctor->name ?>

                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("date") ?></label>

                            <input type="date" name="date" minlength="9" maxlength="9" autocomplete="off" required
                                autofocus class="form-control" value="<?php echo getOldData('date');?>">
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['date'])) {
                               showAlertError($erorrs['date']);
                            }
                           ?>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?php echo translate("status") ?></label>
                            <i class="fa fa-service fa-fw "> </i>
                            <textarea name="status" autocomplete="off"
                                class="form-control"><?php echo getOldData('status');?> </textarea>
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['status'])) {
                               showAlertError($erorrs['status']);
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