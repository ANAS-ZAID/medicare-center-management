<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $erorrs = 
    ServicesController::
    handilngDataService(
        fileetrRequest("serviceName"),
            fileetrRequest("ordering"), 
            fileetrRequest("visibility"),
            fileetrRequest("allowAds"),
            fileetrRequest("discription"),
            
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
            <form action="" method="post" class="form-handilng" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("serviceName") ?></label>
                            <i class="fa fa-first-aid fa-fw "> </i>
                            <input type="text" name="serviceName" autocomplete="off" required autofocus
                                class="form-control" value="<?php echo getOldData('serviceName');?>">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['serviceName'])) {
                               showAlertError($erorrs['serviceName']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><?php echo translate("serviceImage") ?></label>
                            <i class="fa fa-image fa-fw "> </i>
                            <input type="file" name="serviceImage" required class="form-control">

                            <?php
                            if (isset($erorrs)&&isset($erorrs['errorImage'])) {
                               showAlertError($erorrs['errorImage']);
                            }
                           ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("ordering") ?></label>
                            <input type="number" name="ordering" class="form-control"
                                value="<?php echo getOldData('ordering');?>">

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("visibility") ?></label>

                            <select name="visibility" class="form-control">
                                <option value="0" <?php echo getOldData('visibility')==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo getOldData('visibility')==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label><?php echo translate("allowAds") ?></label>

                            <select name="allowAds" class="form-control">
                                <option value="0" <?php echo getOldData('allowAds')==0?"selected":'' ?>>
                                    <?php echo translate("disabled") ?>

                                </option>
                                <option value="1" <?php echo getOldData('allowAds')==1?"selected":'' ?>>
                                    <?php echo translate("enabled") ?>

                                </option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label><?php echo translate("discription") ?></label>
                        <i class="fa fa-service fa-fw "> </i>
                        <textarea name="discription" autocomplete="off"
                            class="form-control"><?php echo getOldData('discription');?> </textarea>
                    </div>
                </div>
                <div class="row">

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