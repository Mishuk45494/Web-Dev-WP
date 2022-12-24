<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <!-- Slider Part Start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php 
        $qry = new WP_Query([
            'post_type'=> 'post',
            'category_name'=> 'slider'
        ]);
        ?>
  <div class="carousel-inner">
<?php
$x = 0;
while( $qry->have_posts()){$qry->the_post();
$x++;

?>

    <div class="carousel-item <?= ($x==1)? 'active':'' ?>">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </header>
    <!-- Slider Part End -->
    <!-- Logo Paryt Start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6 logo_left">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 logo_right text-end">
                <?php dynamic_sidebar('bdlogo');?>
            </div>
        </div>
    </section>
    <!-- Logo Paryt End -->
    <!-- Menu Part start -->
    <section class="container navbar-expand bg-light menu">
        <?php
        wp_nav_menu([
            'theme_location'       => 'PM',
            'menu_class'           => 'navbar-nav',
        ]);
        ?>

    </section>
    <!-- Menu Part End -->
    <!-- Hero Part start -->
    <section class="container hero text-center mt-5">
        <div class="row top">
            <?php dynamic_sidebar('herotitle')?>
        </div>
        <div class="row bottom mt-5">
            <div class="col-sm-4">

            <div class="card" style="width: 18rem;">
                <?php dynamic_sidebar('card1');?>
            </div>
        </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('card2');?>
                </div>      
             </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <?php dynamic_sidebar('card3');?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Part End -->
    <!-- Photo Part Start -->
    <section class="container photo mt-5">
        <div class="row top">
            <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2">
                <?php dynamic_sidebar('phototitle');?>
            </div>
            <div class="col-sm-5">
                <?php dynamic_sidebar('lineright');?>
            </div>
        </div>
        <div class="row bottom text-center mt-5">
            <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                        <?php dynamic_sidebar('photocard1');?>
                </div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
        </div>
    </section>
    <!-- Photo Part End -->
    <!-- News Part Start -->
    <section class="container news">
        <div class="row">
        <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2">
                <?php dynamic_sidebar('phototitle');?>
            </div>
            <div class="col-sm-5">
                <?php dynamic_sidebar('lineright');?>
            </div>
        </div>
        <div class="row">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php 
        $qry = new WP_Query([
            'post_type'=> 'post',
            'category_name'=> 'slider'
        ]);
        ?>
  <div class="carousel-inner">
<?php
$x = 0;
while( $qry->have_posts()){$qry->the_post();
$x++;

?>

    <div class="carousel-item <?= ($x==1)? 'active':'' ?>">
        <?php the_title();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
    </section>
    <!-- News Part End -->
 
<?php wp_footer();?>
</body>
</html>