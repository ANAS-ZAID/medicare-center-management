<?php
ob_start();
session_start();
$path="";
include "root.php";
include $loginController;
?>

<div class="container">
    <form action="" method="post" class="login">
        <h3 class="text-center  fw-bold m-0 mb-2">
            <?php echo translate("sinup")?>
        </h3>
        <div class="form-group">
            <label><?php echo translate("email")?></label>
            <i class="fa fa-envelope fa-fw "> </i>
            <input type="email" name="email" autocomplete="off" required autofocus class="form-control">
        </div>
        <div class="form-group">

            <label><?php echo translate("password")?></label>
            <i class="fa fa-lock fa-fw "> </i>
            <input type="password" name="password" required autocomplete="off" class="form-control">
            <i class="fa fa-eye fa-fw show-password"> </i>
        </div>
        <button type="submit" class="btn btn-primary btn-sm d-block w-100 p-2 mt-3 fs-6">
            <?php echo translate("logIn")?>
        </button>
    </form>
</div>
<?php
 include $footer;
?>