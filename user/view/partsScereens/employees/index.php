<?php

$allEmployees =  EmployeesController::fetchAllEmployees();

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
                <?php foreach($allEmployees as $employee): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-head">
                            <a href="?page=delete&&id=<?php echo $employee->id?>"><i class="fa fa-trash fa-fw">
                                </i></a>
                            <a href="?page=update&&id=<?php echo $employee->id?>"><i class="fa fa-edit fa-fw">
                                </i></a>

                        </div>
                        <img style="height: 150px ; width: 150px; border-radius: 50%; display: block; margin: auto;"
                            src=<?php echo $imgEmployees.$employee->image ?> alt="">
                        <div class=" card-body">
                            <h4>
                                <?php echo $employee->name?>
                            </h4>
                            <p><?php echo words($employee->saivi,10)?></p>

                        </div>
                        <div class="card-footer">
                            <a href="?page=permissions&&id=<?php echo $employee->id?>&&visibility=<?php echo $employee->visibility?>"
                                class="btn <?php echo  $employee->visibility==1?'active':''; ?>"><span>
                                    <?php echo translate("visibility") ?>

                                </span></a>


                        </div>
                        <span class="createdAt">
                            <?php echo "phone: " .$employee->phone ?>
                            <?php echo "ordering: " .$employee->ordering ?>
                        </span>
                        <span class="createdAt">
                            <?php echo translate("department")." : ". (selectFromTable("employment_department","employmentDepartment","id=?",[$employee->id_dep],"one")['data']->employmentDepartment)?>
                        </span>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>