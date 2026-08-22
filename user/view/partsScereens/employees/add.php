<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erorrs = EmployeesController::addEmployee(
        fileetrRequest("idDep"),fileetrRequest("employeeName"),
        fileetrRequest("phone"),fileetrRequest("saivi"),
        fileetrRequest("address"),fileetrRequest("visibility"),
        
        fileetrRequest("visibility"), fileetrRequest("employeeImage"));
    
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
            <form action="" method="post" class="form-handilng" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("employeeName") ?></label>
                            <i class="fa fa-user fa-fw "> </i>
                            <input type="text" name="employeeName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo getOldData('employeeName');?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['employeeName'])) {
                               showAlertError($erorrs['employeeName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("employeeImage") ?></label>
                            <i class="fa fa-image fa-fw "> </i>
                            <input type="file" name="employeeImage" required class="form-control">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['errorImage'])) {
                               showAlertError($erorrs['errorImage']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("phoneNumber") ?></label>
                            <i class="fa fa-phone fa-fw "> </i>
                            <input type="tel" name="phone" minlength="9" maxlength="9" autocomplete="off" required
                                class="form-control" value="<?php echo getOldData('phone');?>">
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['phone'])) {
                               showAlertError($erorrs['phone']);
                            }
                           ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("address") ?></label>
                            <i class="fa fa-address fa-fw "> </i>
                            <input type="text" name="address" required class="form-control"
                                value="<?php echo getOldData('address');?>">
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['address'])) {
                               showAlertError($erorrs['address']);
                            }
                           ?>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("employmentDepartmentName") ?></label>

                            <select name="idDep" class="form-control">
                                <?php foreach ((selectFromTable("employment_department")['data']) as $employmentDepartment): ?>
                                <option value="<?php echo $employmentDepartment->id?>"
                                    <?php echo getOldData('idDep')==$employmentDepartment->id?"selected":'' ?>>
                                    <?php echo  $employmentDepartment->employmentDepartment ?>

                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("ordering") ?></label>
                            <input type="number" name="ordering" class="form-control"
                                value="<?php echo getOldData('ordering');?>">

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("visibility") ?></label>

                            <select name="visibility" class="form-control">
                                <option value="0" <?php echo getOldData('visibility')==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo getOldData('visibility')==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?php echo translate("saivi") ?></label>
                            <i class="fa fa-service fa-fw "> </i>
                            <textarea name="saivi" autocomplete="off"
                                class="form-control"><?php echo getOldData('saivi');?> </textarea>
                        </div>
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