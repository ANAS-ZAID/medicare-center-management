<aside class="sideBar">
    <h3>
        <?php echo translate("centerSinan") ?>
    </h3>
    <ul>
        <li>
            <a href="<?php echo $dashPordScereens ?>"><i class="fa fa-chart-pie fa-fw">
                </i>
            
                <span>
                    <?php echo translate("dashboard") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $adminsScereens ?>" class=<?php disblayedOrHied() ?>><i class=" fa fa-users-cog fa-fw">
                </i>
              
                <span>
                    <?php echo translate("admins") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $usersScereens ?>" class=<?php disblayedOrHied() ?>><i class=" fa fa-users fa-fw">
                </i>
     
                <span>
                    <?php echo translate("users") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $patientsScereens ?>">
             
                <?php displayGroupIcons("user-injured") ?>
                <span class="span-group">
                    <?php echo translate("patients")?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $servicesScereens ?>" class=<?php disblayedOrHied() ?>><i
                    class=" fa fa-first-aid fa-fw">
                </i>
              
               <span>
                    <?php echo translate("services") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $employmentDepartmentScereens ?>" class=<?php disblayedOrHied() ?>><i
                    class=" fa fa-user-tag fa-fw">
                </i>
          
                <span>
                    <?php echo translate("employmentsDepartments") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $employeesScereens ?>" class=<?php disblayedOrHied() ?>><i
                    class=" fa fa-user-doctor fa-fw">
                </i>
       
                <span>
                    <?php echo translate("employees") ?>
                </span>
            </a>
        </li>
        <li>
            <a href="<?php echo $reservationsScereens ?>" class="<?php disblayedOrHied() ?> a-line-left "><i
                    class=" fa fa-calendar-check fa-fw">
                </i>
                
                <span>
                    <?php echo translate("reservations") ?>
                </span>
            </a>
        </li>
    </ul>
</aside>