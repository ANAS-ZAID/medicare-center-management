<?php

$allUsers =  UsersController::fetchAllUsers();

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
                <?php foreach($allUsers as $user): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <a href="?page=delete&&id=<?php echo $user->id?>"><i class="fa fa-trash fa-fw">
                                </i></a>
                            <a href="?page=update&&id=<?php echo $user->id?>"><i class="fa fa-edit fa-fw">
                                </i></a>

                        </div>
                        <img style="height: 150px ; width: 150px; border-radius: 50%; display: block; margin: auto;"
                            src=" <?php echo $layouts ?>img/person.png" alt="">
                        <div class="card-body">
                            <h4>
                                <?php echo $user->name?>
                            </h4>
                            <p><?php echo $user->email?></p>

                        </div>
                        <div class="card-footer">

                            <a href="?page=permissions&&id=<?php echo $user->id?>&&registerStatus=<?php echo $user->registerStatus?>"
                                class="btn <?php echo  $user->registerStatus==1?'active':''; ?> "><span>
                                    <?php echo translate("register")?>
                                </span></a>

                        </div>
                        <!-- <span class="createdAt">
                            <?php 
                            // echo $user->createdAt 
                            ?>
                        </span> -->
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>