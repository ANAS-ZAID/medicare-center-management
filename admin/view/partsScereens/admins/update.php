<?php


$admin = AdminsController::fetchAdminById($_GET['id']);
if ($admin['status']) {
    $admin = $admin['data'];
} else {

    header("Location:?page=index");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (!empty(fileetrRequest("password"))||!empty(fileetrRequest("confairmPassword"))) {
        $password=sha1(fileetrRequest("password"));$confairmPassword= sha1(fileetrRequest("confairmPassword"));
    }else{
        $password=$admin->password;$confairmPassword= $admin->password;
    }
   
    $erorrs = AdminsController::handilngDataAdmin(fileetrRequest("adminName"), fileetrRequest("email"), $password, $confairmPassword,$admin->id, "update");

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
                    <span> <?php echo translate("back") ?></span>
                </a>
            </li>
            <?php include $footerNavBar ?>
            <form action="" method="post" class="form-handilng" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("adminName") ?></label>
                            <i class="fa fa-admin fa-fw "> </i>
                            <input type="text" name="adminName" autocomplete="off" required class="form-control"
                                value="<?php echo $admin->name; ?>">
                            <?php
                            if (isset($erorrs) && isset($erorrs['adminName'])) {
                                showAlertError($erorrs['adminName']);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("email") ?></label>
                            <i class="fa fa-envelope fa-fw "> </i>
                            <input type="email" name="email" autocomplete="off" required autofocus class="form-control"
                                value="<?php echo $admin->email; ?>">
                        </div>
                        <?php
                        if (isset($erorrs) && isset($erorrs['email'])) {
                            showAlertError($erorrs['email']);
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php translate("password") ?></label>
                            <i class="fa fa-lock fa-fw "> </i>
                            <input type="password" name="password" required autocomplete="off" class="form-control"
                                value="<?php getOldData('password');?>">
                            <i class="fa fa-eye fa-fw show-password "> </i>
                        </div>
                        <?php
                        if (isset($erorrs) && isset($erorrs['password'])) {
                            showAlertError($erorrs['password']);
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("confairmPassword") ?></label>
                            <i class="fa fa-lock fa-fw "> </i>
                            <input type="password" name="confairmPassword" required autocomplete="off"
                                class="form-control" value="<?php getOldData('confairmPassword') ?>">
                            <i class="fa fa-eye fa-fw show-password"> </i>
                        </div>
                        <?php
                        if (isset($erorrs) && isset($erorrs['confairmPassword'])) {
                            showAlertError($erorrs['confairmPassword']);
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-2  p-2 fs-6">
                            <?php echo translate("edit") ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>