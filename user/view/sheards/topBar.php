<div class="topBar d-flex">

    <div class="title">
        <!-- <i class="fa fa-list fa-fw" id="show-said-bar">

        </i> -->
    </div>
    <div class=" action">
        <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fa fa-cog fa-fw">

                </i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <p>
                    <?php echo $_SESSION['auth']->email?></p>
                <img src=" <?php echo $layouts ?>img/person.png" alt="">
                <p>
                    <?php echo $_SESSION['auth']->name?></p>
                <div> <a class="dropdown-item" href="?page=add"> <i class="fa fa-add fa-fw">

                        </i>
                        <?php echo translate("addUser")?></a>
                    <a class="dropdown-item" href="logout.php">
                        <!-- <i class="fa fa-add fa-fw">

                        </i> -->
                        <?php echo translate("logout")?>
                    </a>
                </div>

            </ul>
        </div>


    </div>
</div>