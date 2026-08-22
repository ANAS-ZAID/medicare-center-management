<?php

$allServices =  ServicesController::fetchAllServices();

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
                <?php foreach($allServices as $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <a href="?page=delete&&id=<?php echo $service->id?>"><i class="fa fa-trash fa-fw">
                                </i></a>
                            <a href="?page=update&&id=<?php echo $service->id?>"><i class="fa fa-edit fa-fw">
                                </i></a>

                        </div>
                        <img style="height: 150px ; width: 150px; border-radius: 50%; display: block; margin: auto;"
                            src=<?php echo $imgServices.$service->image ?> alt="">
                        <div class=" card-body">
                            <h4>
                                <?php echo $service->service?>
                            </h4>
                            <p><?php echo words($service->discription,10)?></p>

                        </div>
                        <div class="card-footer">
                            <a href="?page=permissions&&id=<?php echo $service->id?>&&visibility=<?php echo $service->visibility?>"
                                class="btn <?php echo  $service->visibility==1?'active':''; ?>"><span>
                                    <?php echo translate("visibility") ?>

                                </span></a>
                            <a href="?page=permissions&&id=<?php echo $service->id?>&&allowAds=<?php echo $service->allowAds?>"
                                class="btn <?php echo  $service->allowAds==1?'active':''; ?> "><span>
                                    <?php echo translate("allowAds") ?>
                                </span></a>

                        </div>
                        <span class="createdAt">
                            <?php echo "ordering: " .$service->ordering ?>
                        </span>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>