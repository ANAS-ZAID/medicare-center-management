<?php

$allCategories =  CategoriesController::fetchAllCategories();

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
                <?php foreach($allCategories as $category): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <a href="?page=delete&&id=<?php echo $category->id?>"><i class="fa fa-trash fa-fw">
                                </i></a>
                            <a href="?page=update&&id=<?php echo $category->id?>"><i class="fa fa-edit fa-fw">
                                </i></a>

                        </div>

                        <div class="card-body">
                            <h4>
                                <?php echo $category->category?>
                            </h4>
                            <p><?php echo words($category->discription,10)?></p>

                        </div>
                        <div class="card-footer">
                            <a href="?page=permissions&&id=<?php echo $category->id?>&&visibility=<?php echo $category->visibility?>"
                                class="btn <?php echo  $category->visibility==1?'active':''; ?>"><span>
                                    <?php echo translate("visibility") ?>

                                </span></a><a
                                href="?page=permissions&&id=<?php echo $category->id?>&&allowComments=<?php echo $category->allowComments?>"
                                class="btn <?php echo  $category->allowComments==1?'active':''; ?>"><span>
                                    <?php echo translate("allowComments") ?>
                                </span></a>
                            <a href="?page=permissions&&id=<?php echo $category->id?>&&allowAds=<?php echo $category->allowAds?>"
                                class="btn <?php echo  $category->allowAds==1?'active':''; ?> "><span>
                                    <?php echo translate("allowAds") ?>
                                </span></a>

                        </div>
                        <span class="createdAt">
                            <?php echo $category->ordering ?>
                        </span>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>