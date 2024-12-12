


<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image1']?>)">
    </div>
    <div class="page-header__gradient"
        style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image2']?>);"></div>
    <div class="shape1 float-bob-x"><img src="<?=base_url()?>uploads/<?=$banners[0]['banner_image3']?>" alt="#"></div>

    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Our Projects</h2>
            <ul class="thm-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><span>/</span></li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Projects One-->
<section class="projects-one projects-one--projects">
    <div class="container">

        <div class="row">
            <!--Start Projects One Single-->
            <?php
foreach($project as $row)
{


?>
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="projects-one__single">
                    <div class="projects-one__single-img">
                        <div class="inner">
                            <img src="<?=base_url()?>uploads/<?=$row['project_image']?>" alt="#">
                            <div class="overlay-content">
                                <div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape1.png"
                                        alt="#"></div>
                                <div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape2.png"
                                        alt="#"></div>
                                <div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape3.png"
                                        alt="#"></div>
                                <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape4.png"
                                        alt="#"></div>
                                <div class="content-box">
                                    <p class="text1">Tech</p>
                                    <h3><a href="<?=base_url()?>user/project"><?=$row['project_heading']?></a></h3>
                                    <p class="text2"><?=$row['project_details']?> </p>
                                </div>

                                <div class="icon-box">
                                    <a href="<?=base_url()?>user/project"><span class="icon-right-arrow3"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Projects One Single-->
            <?php

}
?>

         
        </div>
    </div>
</section>
<!--End Projects One-->