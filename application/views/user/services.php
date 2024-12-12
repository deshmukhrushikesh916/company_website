  <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image1']?>)">
            </div>
            <div class="page-header__gradient"
                style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image2']?>);"></div>
            <div class="shape1 float-bob-x"><img src="<?=base_url()?>uploads/<?=$banners[0]['banner_image3']?>" alt="#"></div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>OUR SERVICES</h2>   
                    <ul class="thm-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Services One-->
        <section class="services-one services-one--two services">
            <div class="container">
                <div class="row">

                    <!--Start Services One Single-->
                    <?php
               foreach($services as $row)
               {


                 ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single text-center">
                            <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape12.png" alt="#"></div>
                            <div class="services-one__single-icon">
                                <div class="shape1"></div>
                                <span class="<?=$row['services_icon']?>"></span>
                            </div>

                            <div class="services-one__single-content">
                                <h2><a href="it-consultancy.html"><?=$row['services_title']?></a></h2>
                                <p><?=$row['services_details']?> </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->
                    <?php

}
?>

                  
            </div>
        </section>
        <!--End Services One-->

      <!--Start Intro One-->
<section class="intro-one">
<div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shape2.png" alt=""></div>
<div class="container">
<div class="row">

<!--Start Intro One Single-->
<?php
foreach($features as $row)
{


?>
<div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
<div class="intro-one__single">
<div class="intro-one__single-img">
<div class="inner">
<img src="<?=base_url()?>uploads/<?=$row['features_image']?>" alt="#">
</div>

</div>

<div class="intro-one__single-content text-center">
<div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/intro-v1-shape1.png" alt="#"></div>
<h2><a href="#"><?=$row['features_title']?></a></h2>
<p><?=$row['features_details']?></p>
</div>
</div>
</div>
<!--End Intro One Single-->
<?php

}
?>

</div>
</div>
</section>
<!--End Intro One-->

      