<?php
ob_start();
session_start();
$path="";
include "root.php";
include $homeController;
?>

<header class="landing">
    <!------------ Container ------------>
    <div class="container">
        <h1>Welcome To Center Mohammed Sinan</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis vel odio corporis? Quam nobis, harum eum delectus accusantium voluptate placeat libero deserunt amet asperiores. Itaque nobis voluptatem ex corrupti quo!</p>
    </div> <!-- Container -->
</header> <!-- Landing -->
<!------------ Main ------------>
<main>
    <!------------ Categories ------------>
    <section class="categories">
        <!------------ Title ------------>
        <h2>Services</h2>
        <!------------ Description ------------>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
        <!------------ Container ------------>
        <div class="container">
            <!------------ Row ------------>
            <div class="row">
                <?php foreach (selectFromTable('services', '*', 'visibility = 1')['data'] as $item) : ?>
                <!------------ Category ------------>
                <div class="col-lg-4 col-sm-6">
                    <!------------ Part ------------>
                    <div class="category">
                        <i class="fa fa-first-aid fa-fw"></i>
                        <!------------ Show ------------>
                        <a href="admin/?page=services">
                            <?php echo $item->service ?>
                        </a> <!-- Show -->
                        <span><?php echo $item->discription ?></span>
                    </div> <!-- Part -->
                </div> <!-- Category -->
                <?php endforeach ?>
            </div> <!-- Row -->
        </div> <!-- Container -->
    </section> <!-- Categories -->
    <!------------ Products ------------>
    <section class="products">
        <!------------ Title ------------>
        <h2>Featured Services</h2>
        <!------------ Description ------------>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
        <!------------ Container ------------>
        <div class="container">
            <!------------ Row ------------>
            <div class="row">
                <?php foreach (selectFromTable('services', '*', 'visibility = 1 AND allowAds = 1')['data'] as $item) : ?>
                <!------------ Product ------------>
                <div class="col-lg-4 col-sm-6">
                    <!------------ Part ------------>
                    <div class="product">
                        <img src="<?php echo $imgServices . $item->image ?>" alt="<?php echo $item->service ?>">
                        <div>
                            <!------------ Show ------------>
                            <a href="admin/?page=services">
                                <?php echo $item->service ?>
                            </a> <!-- Show -->
                            <span><?php words($item->discription, 50) ?></span>
                        </div>
                    </div> <!-- Part -->
                </div> <!-- Product -->
                <?php endforeach ?>
            </div> <!-- Row -->
        </div> <!-- Container -->
    </section> <!-- Products -->
</main>
<?php
 include $footer;
?>