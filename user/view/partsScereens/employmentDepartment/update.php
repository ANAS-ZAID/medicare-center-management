<?php



$employmentDepartment = EmploymentDepartmentController::fetchEmploymentDepartmentrById($_GET['id']);
if ($employmentDepartment['status']) {
    $employmentDepartment = $employmentDepartment['data'];

} else {

    header("Location:?page=index");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $erorrs = EmploymentDepartmentController::
    handilngDataEmploymentDepartment(
      fileetrRequest("employmentDepartmentName"),
      fileetrRequest("discription"),
      $employmentDepartment->image,
      $employmentDepartment->id,
       "update"
);
// header("Location:?page=index");
// exit;
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
                            <label><?php echo translate("employmentDepartmentName") ?></label>
                            <i class="fa fa-employmentDepartment fa-fw "> </i>
                            <input type="text" name="employmentDepartmentName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo $employmentDepartment->employmentDepartment;?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['employmentDepartmentName'])) {
                               showAlertError($erorrs['employmentDepartmentName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("employmentDepartmentImage") ?></label>
                            <i class="fa fa-image fa-fw "> </i>
                            <input type="file" name="employmentDepartmentImage" required class="form-control">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['errorImage'])) {
                               showAlertError($erorrs['errorImage']);
                            }
                           ?>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?php echo translate("discription") ?></label>
                            <i class="fa fa-employmentDepartment fa-fw "> </i>
                            <textarea name="discription" autocomplete="off"
                                class="form-control"><?php echo $employmentDepartment->discription;?></textarea>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-2  p-2 fs-6">
                                <?php echo translate("edit") ?>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </section>
</main>