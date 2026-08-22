<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erorrs = UsersController::handilngDataUser(fileetrRequest("userName"), fileetrRequest("email"), fileetrRequest("password"),fileetrRequest("confairmPassword"));

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
                            <label><?php echo translate("userName") ?></label>
                            <i class="fa fa-user fa-fw "> </i>
                            <input type="text" name="userName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo getOldData('userName');?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['userName'])) {
                               showAlertError($erorrs['userName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("email") ?></label>
                            <i class="fa fa-envelope fa-fw "> </i>
                            <input type="email" name="email" autocomplete="off" required autofocus class="form-control"
                                value="<?php echo getOldData('email');?>">
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['email'])) {
                               showAlertError($erorrs['email']);
                            }
                           ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php  translate("password") ?></label>
                            <i class="fa fa-lock fa-fw "> </i>
                            <input type="password" name="password" required autocomplete="off" class="form-control"
                                value="<?php echo getOldData('password');?>">
                            <i class="fa fa-eye fa-fw show-password "> </i>
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['password'])) {
                               showAlertError($erorrs['password']);
                            }
                           ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("confairmPassword") ?></label>
                            <i class="fa fa-lock fa-fw "> </i>
                            <input type="password" name="confairmPassword" required autocomplete="off"
                                class="form-control" value="<?php echo getOldData('confairmPassword');?>">
                            <i class="fa fa-eye fa-fw show-password"> </i>
                        </div>
                        <?php
                            if (isset($erorrs)&&isset($erorrs['confairmPassword'])) {
                               showAlertError($erorrs['confairmPassword']);
                            }
                           ?>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-2  p-2 fs-6">
                            <?php echo translate("add") ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>