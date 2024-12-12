 <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image1']?>)">
            </div>
            <div class="page-header__gradient"
                style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image2']?>);"></div>
            <div class="shape1 float-bob-x"><img src="<?=base_url()?>uploads/<?=$banners[0]['banner_image3']?>" alt="#"></div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>Our Blog</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>BLog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Blog One-->
        <section class="blog-one blog-one--blog">
            <div class="container">
                <div class="row">
                    <!--Start Blog One Single-->
                         <?php
                  foreach($blog as $row)
                  {


                      ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="<?=base_url()?>uploads/<?=$row['blog_image']?>" alt="#">
                                <div class="text-box"><?=$row['blog_title']?></div>
                            </div>
                            <div class="blog-one__single-content">
                                <ul class="meta-box">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-user3"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">By Admin</a></p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-comment"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="#">12 Comment</a></p>
                                        </div>
                                    </li>
                                </ul>

                                <h2><a href="blog-details.html"><?=$row['blog_details']?></a>
                                </h2>
                                <div class="btn-box">
                                    <a href="<?=base_url()?>user/blog">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <?php

                       }
                      ?>

    
                </div>
            </div>
        </section>
        <!--End Blog One-->