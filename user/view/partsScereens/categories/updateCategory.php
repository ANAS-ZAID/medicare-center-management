<?php



$category = CategoriesController::fetchCategoryrById($_GET['id']);
if ($category['status']) {
    $category = $category['data'];
} else {

    header("Location:?page=index");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $erorrs = CategoriesController::
    handilngDataCategory(fileetrRequest("categoryName"), fileetrRequest("ordering"), fileetrRequest("visibility"),fileetrRequest("allowComments"),fileetrRequest("allowAds"),fileetrRequest("discription"),$category->id, "update"
);

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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?php echo translate("categoryName") ?></label>
                            <i class="fa fa-category fa-fw "> </i>
                            <input type="text" name="categoryName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo $category->category;?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['categoryName'])) {
                               showAlertError($erorrs['categoryName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("ordering") ?></label>
                            <input type="number" name="ordering" class="form-control"
                                value="<?php echo $category->ordering;?>">

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("visibility") ?></label>

                            <select name="visibility" class="form-control">
                                <option value="0" <?php echo $category->visibility==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo $category->visibility==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("allowComments") ?></label>

                            <select name="allowComments" class="form-control">
                                <option value="0" <?php echo $category->allowComments==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo $category->allowComments==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("allowAds") ?></label>

                            <select name="allowAds" class="form-control">
                                <option value="0" <?php echo $category->allowAds==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo $category->allowAds==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label><?php echo translate("discription") ?></label>
                        <i class="fa fa-category fa-fw "> </i>
                        <textarea name="discription" autocomplete="off"
                            class="form-control"><?php echo $category->discription;?></textarea>
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