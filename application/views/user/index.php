
<!--Start Main Slider One-->
<section class="main-slider main-slider-one">
<div class="main-slider-one__inner">
<div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow2\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

<?php
foreach($slides as $row)
{


?>
<!--Start Main Slider One Single-->
<div class="main-slider-one__single">
<div class="image-layer" style="background-image:url(<?=base_url()?>uploads/<?=$row['slider_image']?>)">
</div>

<div class="container">
<div class="main-slider-one__content text-center">
<div class="title">
<h2><?=$row['slider_heading']?></h2>
</div>

<div class="text">
<p><?=$row['slider_subheading']?></p>
</div>

<div class="main-slider-one__content-btn">
<a class="thm-btn" href="<?=base_url()?>user/contact">View Our Services</a>
</div>

</div>

</div>
</div>
<!--End Main Slider One Single-->

<?php

}
?>
</div>
</div>
</section>
<!--End Main Slider One-->

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


        <!--Start About Three-->
        <section class="about-three">
            <div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v3-shape3.png" alt="#"></div>
            <div class="shape5"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v3-shape4.png" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start About One Img-->
                    <div class="col-xl-5">
                        <div class="about-three__img clearfix">
                            <div class="shape2"></div>
                            <div class="shape3"></div>
                            <div class="about-three__img1 wow fadeInLeft" data-wow-delay=".3s">
                                <img src="<?=base_url()?>uploads/<?=$about[0]['image1']?>" alt="#">
                            </div>

                            <div class="about-three__img2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="inner">
                                    <img src="<?=base_url()?>uploads/<?=$about[0]['image2']?>" alt="#">
                                </div>
                                <div class="shape1 rotate-me"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v3-shape1.png"
                                        alt="#"></div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Img-->

                    <!--Start About One Content-->
                    <div class="col-xl-7">
                        <div class="about-three__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <div class="inner">
                                        <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png"
                                                alt="#">
                                        </div>
                                        <div class="text">
                                            <p>introduce Company</p>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="sec-title__title"><?=$about[0]['about_title']?></h2>
                            </div>

                            <div class="about-three__content-text1">
                                <p><?=$about[0]['about_details']?></p>
                            </div>

                            <div class="about-three__content-text2">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="about-three__content-text2-left">
                                            <ul>
                                                <li>
                                                    <div class="icon-box">
                                                        <span class="icon-buoy-help"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h3>Tech Solution</h3>
                                                        <p><?=$about[0]['about_key1']?> </p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon-box">
                                                        <span class="icon-answer-call"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h3>Quick support</h3>
                                                        <p><?=$about[0]['about_key2']?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="about-three__content-text2-progress">
                                            <div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape1.png"
                                                    alt="#"></div>
                                            <div class="shape7"><img src="<?=base_url()?>assets/user_assets/images/shapes/about-v1-shape2.png"
                                                    alt="#"></div>
                                            <div class="progress-box">
                                                <div class="graph-outer">
                                                    <input type="text" class="dial" data-fgColor="#ffffff"
                                                        data-bgColor="#fcbb54" data-width="80" data-height="80"
                                                        data-linecap="normal" value="95">
                                                    <div class="inner-text count-box"><span class="count-text"
                                                            data-stop="95" data-speed="2000"></span><span
                                                            class="count-Parsent">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h3>IT Project Solution</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-three__content-text3">
                                <ul>
                                    <li>
                                        <p><span class="icon-check-circle"></span><?=$about[0]['text1']?> </p>
                                    </li>

                                    <li>
                                        <p><span class="icon-check-circle"></span><?=$about[0]['text2']?></p>
                                    </li>
                                </ul>
                            </div>

                            <div class="about-three__content-text4">
                                <div class="img-box">
                                    <img src="<?=base_url()?>assets/user_assets/images/shapes/about-v3-shape2.png" alt="#">
                                </div>
                                <div class="text-box">
                                    <p>FOR YOUR IT BUSINESS, WE MADE THINGS EASIER</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Content-->
                </div>
            </div>
        </section>
        <!--End About Three-->


<!--Start Services One-->
<section class="services-one">
<div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape2.png" alt="#"></div>
<div class="shape4"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape3.png" alt="#"></div>
<div class="shape5"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape4.png" alt="#"></div>
<div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape5.png" alt="#"></div>
<div class="shape7"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape6.png" alt="#"></div>
<div class="shape8"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape7.png" alt="#"></div>
<div class="shape9"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape8.png" alt="#"></div>
<div class="shape10"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape9.png" alt="#"></div>
<div class="shape11"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape10.png" alt="#"></div>
<div class="shape12"><img src="<?=base_url()?>assets/user_assets/images/shapes/services-v1-shape11.png" alt="#"></div>
<div class="container">
<div class="services-one__top">
<div class="sec-title">
<div class="sec-title__tagline">
<div class="inner">
<div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
</div>
<div class="text">
<p>Our Services</p>
</div>
</div>
</div>
<h2 class="sec-title__title">Providing complete <br>
Professional IT Services</h2>
</div>

<div class="services-one__top-text">
<p>Nemo enim ipsam voluptatem quia voluptas sit asper
natur aut odit aut fugit, sed quia consequuntur magni dolor
qui ratione business</p>
</div>
</div>

<div class="row">
<!--Start Services One Single-->

<?php
foreach($services as $row)
{


?>
<div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms"
data-wow-duration="1000ms">
<div class="services-one__single text-center">
<div class="shape2"><img src="<?=base_url()?>uploads/<?=$row['services_image']?>" alt="#"></div>
<div class="services-one__single-icon">
<div class="shape1"></div>
<span class="<?=$row['services_icon']?>"></span>
</div>

<div class="services-one__single-content">
<h2><a href="<?=base_url()?>user/services"><?=$row['services_title']?></a></h2>
<p><?=$row['services_details']?></p>
</div>
</div>
</div>
<!--End Services One Single-->
<?php

}
?>



</div>

<div class="services-one__bottom text-center">
<h2>We’re Ready Grow your IT Solution !</h2>
<p>Nemo enim ipsam voluptatem quia voluptas sit asper natur aut odit aut fugit <br>
sed quia consequuntur magni dolor qui ratione business</p>
<div class="btn-box">
<a class="thm-btn" href="#">More Solution</a>
</div>
</div>

</div>
</section>
<!--End Services One-->

<!--Start Video One-->
<section class="video-one">
<div class="shape1"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape1.png" alt="#"></div>
<div class="shape2"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape1.png" alt="#"></div>
<div class="container">
<div class="video-one__inner">
<div class="shape3"><img src="<?=base_url()?>assets/user_assets/images/shapes/video-v1-shape3.png" alt="#"></div>
<div class="video-one__bg"
style="background-image: url(<?=base_url()?>uploads/<?=$it_solution[0]['it_solution_image']?>);"></div>

<div class=" video-one__icon">
<a href="<?=$it_solution[0]['it_solution_youtube_link']?>" class="video-one__btn video-popup">
<span class="icon-play-button"></span>
</a>
<span class="border-animation border-1"></span>
<span class="border-animation border-2"></span>
<span class="border-animation border-3"></span>
</div>
<div class="title-box text-center">
<h2><?=$it_solution[0]['it_solution_caption']?></h2>
</div>
</div>
</div>
</section>
<!--End Video One-->


        <!--Start Testimonial One-->
        <section class="testimonial-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
                            </div>
                            <div class="text">
                                <p>Our Testimonial</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">Our Client Feedback What <br>
                        They’re Talking?</h2>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel case-one__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-next\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        },
                                        "1500": {
                                            "items": 2
                                        }
                                    }
                                }'>

                                 <?php
                          foreach($testimonial as $row)
                       {


                         ?>
                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__single-img">
                                        <div class="testimonial-one__single-img-bg"
                                            style="background-image: url(<?=base_url()?>assets/user_assets/images/shapes/testimonial-v1-shape1.png);">
                                        </div>
                                        <img src="<?=base_url()?>uploads/<?=$row['testimonial_image']?>" alt="#">
                                    </div>

                                    <div class="testimonial-one__single-content">
                                        <div class="testimonial-one__single-content-top">
                                            <div class="icon-box">
                                                <span class="icon-bubble-message"></span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="icon-star2"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="testimonial-one__single-content-middle">
                                            <h2><?=$row['testimonial_heading']?></h2>
                                            <p><?=$row['testimonial_details']?>
                                            </p>
                                        </div>

                                        <div class="testimonial-one__single-content-bottom">
                                            <h2><?=$row['testimonial_name']?></h2>
                                            <p><?=$row['testimonial_position']?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->
                                <?php

                                }
                               ?>


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial One-->



<!--Start Projects One-->
<section class="projects-one">
<div class="shape5"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape5.png" alt="#"></div>
<div class="shape6"><img src="<?=base_url()?>assets/user_assets/images/shapes/projects-v1-shape6.png" alt="#"></div>
<div class="container">
<div class="sec-title text-center">
<div class="sec-title__tagline">
<div class="inner">
<div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
</div>
<div class="text">
<p>Our Completed Projects</p>
</div>
</div>
</div>
<h2 class="sec-title__title">Technology Solutions Recent <br>
Our Tech Projects</h2>
</div>
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

<!--Start Cta One-->
<section class="cta-one">
<div class="container">
<div class="cta-one__inner">
<div class="cta-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/cta-v1-bg.jpg);">
</div>
<div class="cta-one__text">
<h2>IT Services Customized for Your Agency</h2>
</div>

<div class="cta-one__btn">
<a href="<?=base_url()?>user/contact">View All Protfolio</a>
</div>
</div>
</div>
</section>
<!--End Cta One-->

<!--Start Counter One-->
<section class="counter-one">
<div class="counter-one__bg" style="background-image: url(<?=base_url()?>uploads/<?=$counter[0]['counter_background_image']?>);">
</div>
<div class="container">
<div class="row">
<!--Start Counter One Single-->
<div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
<div class="counter-one__single">
<div class="counter-one__single-top">
<div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
</div>
<div class="content-box">
<h2><span class="odometer" data-count="<?=$counter[0]['counter1']?>">00</span> <span class="plus">+</span>
</h2>
</div>
</div>

<div class="counter-one__single-text">
<h3>Our Successful <br>
Completed Projects</h3>
</div>
</div>
</div>
<!--End Counter One Single-->

<!--Start Counter One Single-->
<div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
<div class="counter-one__single">
<div class="counter-one__single-top">
<div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
</div>
<div class="content-box">
<h2><span class="odometer" data-count="<?=$counter[0]['counter2']?>">00</span> <span class="plus">+</span>
</h2>
</div>
</div>

<div class="counter-one__single-text">
<h3>Our Agency <br>
IT Specialists</h3>
</div>
</div>
</div>
<!--End Counter One Single-->

<!--Start Counter One Single-->
<div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
<div class="counter-one__single">
<div class="counter-one__single-top">
<div class="img-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/counter-v1-shape1.png" alt="#">
</div>
<div class="content-box">
<h2><span class="odometer" data-count="<?=$counter[0]['counter3']?>">00</span> <span class="plus">+</span>
</h2>
</div>
</div>

<div class="counter-one__single-text">
<h3>Our Successful <br>
Completed Projects</h3>
</div>
</div>
</div>
<!--End Counter One Single-->
</div>

<div class="counter-one__bottom text-center">
<h2>Assisting you in Overcoming your <br>
Technological Obstacles</h2>
<div class="btn-box">
<a class="thm-btn" href="<?=base_url()?>user/contacct">Discover more </a>
</div>
</div>
</div>
</section>
<!--End Counter One-->

<!--Start Team One-->
<section class="team-one">
<div class="container">
<div class="sec-title text-center">
<div class="sec-title__tagline">
<div class="inner">
<div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
</div>
<div class="text">
<p>Our Team</p>
</div>
</div>
</div>
<h2 class="sec-title__title">Our Professional Team</h2>
</div>
<div class="row">
    <?php
foreach($our_team as $row)
{


?>
<!--Start Team One Single-->
<div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
<div class="team-one__single">
<div class="team-one__single-img">
<div class="inner">
<img src="<?=base_url()?>uploads/<?=$row['our_team_image']?>" alt="#">
<div class="social-link">
<ul>
<li>
<a class="fb" href="<?=$row['facebook_link']?>"><span class="icon-facebook"></span></a>
</li>
<li>
<a class="tw" href="<?=$row['twitter_link']?>"><span class="icon-twitter"></span></a>
</li>
<li>
<a class="pin" href="<?=$row['pinterest_link']?>"><span class="icon-pinterest"></span></a>
</li>
<li>
<a class="in" href="<?=$row['instagram_link']?>"><span class="icon-instagram"></span></a>
</li>
</ul>
</div>
</div>
</div>

<div class="team-one__single-content text-center">
<h2><a href="<?=base_url()?>user/"><?=$row['our_team_name']?></a></h2>
<p><?=$row['our_team_position']?></p>
</div>
</div>
</div>
<!--End Team One Single-->
<?php

}
?>

</div>
</div>
</section>
<!--End Team One-->

<!--Start Blog One-->
<section class="blog-one">
<div class="blog-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/blog-v1-bg.jpg);"></div>
<div class="container">
<div class="sec-title text-center">
<div class="sec-title__tagline">
<div class="inner">
<div class="round-box"><img src="<?=base_url()?>assets/user_assets/images/shapes/sec-title-shape.png" alt="#">
</div>
<div class="text">
<p>Our News Post</p>
</div>
</div>
</div>
<h2 class="sec-title__title">Latest News & Articles</h2>
</div>
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

<h2><a href="<?=base_url()?>user/blog"><?=$row['blog_details']?></a>
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



