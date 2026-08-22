<?php

$allEmploymentDepartments =  EmploymentDepartmentController::fetchAllEmploymentDepartment();

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
                <?php foreach($allEmploymentDepartments as $employmentDepartment): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <a href="?page=delete&&id=<?php echo $employmentDepartment->id?>"><i
                                    class="fa fa-trash fa-fw">
                                </i></a>
                            <a href="?page=update&&id=<?php echo $employmentDepartment->id?>"><i
                                    class="fa fa-edit fa-fw">
                                </i></a>

                        </div>
                        <img style="height: 150px ; width: 150px; border-radius: 50%; display: block; margin: auto;"
                            src=<?php echo $imgEmploymentDepartment.$employmentDepartment->image ?> alt="">
                        <div class=" card-body">
                            <h4>
                                <?php echo $employmentDepartment->employmentDepartment?>
                            </h4>
                            <p><?php echo words($employmentDepartment->discription,10)?></p>

                        </div>

                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>