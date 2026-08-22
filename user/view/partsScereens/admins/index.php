<?php

$allAdmins = AdminsController::fetchAllAdmins();

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
            <div class="row">
                <?php foreach ($allAdmins as $admin): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-head">
                                <!-- <a href="?page=delete&&id=<?php echo $admin->id ?>"><i class="fa fa-trash fa-fw">
                                </i></a> -->
                                <a href="?page=update&&id=<?php echo $admin->id ?>"><i class="fa fa-edit fa-fw">
                                    </i></a>

                            </div>
                            <img style="height: 150px ; width: 150px; border-radius: 50%; display: block; margin: auto;"
                                src=" <?php echo $layouts ?>img/person.png" alt="">
                            <div class="card-body">
                                <h4>
                                    <?php echo $admin->name ?>
                                </h4>
                                <p><?php echo $admin->email ?></p>

                            </div>
                            <div class="card-footer">
                                <a href="?page=permissions&&id=<?php echo $admin->id ?>&&isAdmin=<?php echo $admin->isAdmin ?>"
                                    class="btn <?php echo $admin->isAdmin == 1 ? 'active' : ''; ?>"><span>
                                        <?php echo translate("admin") ?>

                                        <!-- </span></a><a
                                href="?page=permissions&&id=<?php //echo $admin->id ?>&&isSupAdmin=<?php //echo $admin->isSupAdmin ?>"
                                class="btn <?php //echo $admin->isSupAdmin==1?'active':''; ?>"><span>
                                    <?php //echo translate("supAdmin") ?>
                                </span></a> -->
                                        <a href="?page=permissions&&id=<?php echo $admin->id ?>&&registerStatus=<?php echo $admin->registerStatus ?>"
                                            class="btn <?php echo $admin->registerStatus == 1 ? 'active' : ''; ?> "><span>
                                                <?php echo translate("register") ?>
                                            </span></a>

                            </div>
                            <!-- <div class="card-footer-account-mony">

                                <div class="col-lg-3">
                                    <span>
                                        <?php echo translate("debtor") . " : " ?>
                                    </span>
                                    <span>
                                        <?php
                                        echo $admin->debtor
                                            ?>
                                    </span>
                                </div>
                                <div class="col-lg-3">
                                    <span>
                                        <?php echo translate("creditor") . " : " ?>
                                    </span>
                                    <span>
                                        <?php
                                        echo $admin->creditor
                                            ?>
                                    </span>
                                </div>
                                <div class="col-lg-3">
                                    <span>
                                        <?php echo translate("palance") . " : " ?>
                                    </span>
                                    <span>
                                        <?php
                                        echo $admin->palance
                                            ?>
                                    </span>
                                </div>




                            </div> -->

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>