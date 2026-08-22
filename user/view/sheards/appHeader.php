<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin/view/layouts/lib/normalize.css">
    <link rel="stylesheet" href="admin/view/layouts/lib/bootstrap.min.css">
    <link rel="stylesheet" href="admin/view/layouts/lib/fontawesome-free-6.3.0.css">

    <link rel="stylesheet" href="<?php echo $layouts ?>css/style.css">
    <?php if (isset($_SESSION['authUser'])) : ?>
    <link rel="stylesheet" href="admin/view/layouts/css/style.css">
    <?php endif ?>
    <title>Document</title>
</head>

    <!------------ Body ------------>
    <body>
        <!------------ Wraning ------------>
        <?php if (isset($_SESSION['guest']) && $_SESSION['guest']->register_status == 0) : ?>
        <div class="p-2">
            <div class="alert alert-warning m-0 text-center p-2">
                Your Usership Need To Activiate By Admin
            </div>
        </div>
        <?php endif ?>
        <!------------ Navbar ------------>
        <nav class="navbar navbar-expand-lg">
            <!------------ Container ------------>
            <div class="container">
                <!------------ Brand ------------>
                <a class="navbar-brand" href="index.php">
                Center Mohammed Sinan
                </a> <!-- Brand -->
                <!------------ Toggler ------------>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars fa-fw"></i>
                </button> <!-- Toggler -->
                <!------------ Collapse ------------>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!------------ Nav ------------>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!------------ Home ------------>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li> <!-- Home -->
                        <!------------ Category ------------>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="categories.php?page=index">Category</a>
                        </li> <!-- Category -->
                        <?php if (!isset($_SESSION['guest'])) : ?>
                        <!------------ Login ------------>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="auth.php?page=login">Login</a>
                        </li> <!-- Login -->
                        <?php else : ?>
                        <!------------ Guest ------------>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="auth.php?page=profile">
                                <i class="fa fa-user fa-fw"></i>
                            </a>
                        </li> <!-- Guest -->
                        <?php endif ?>
                    </ul> <!-- Nav -->
                </div> <!-- Collapse -->
            </div> <!-- Container -->
        </nav> <!-- Navbar -->