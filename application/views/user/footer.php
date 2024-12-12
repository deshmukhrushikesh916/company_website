
 <!--Start Google Map One-->
        <section class="google-map-one">
            <iframe src=" <?=$info[0]['map_link']?>"
                class="google-map-one__map" allowfullscreen></iframe>
        </section>
        
       
        <!--End Google Map One--> -->

<!--Start Contact Info One-->
<section class="contact-info-one">
<div class="container">
<div class="contact-info-one__inner">
<div class="contact-info-one__bg"
style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/contact-info-v1-bg.jpg);"></div>
<div class="row">
<!--Start Contact Info One Single-->
<div class="col-xl-4 col-lg-4">
<div class="contact-info-one__single">
<div class="icon-box">
<span class="icon-location-filled"></span>
</div>

<div class="content-box">
<h3><?=$info[0]['company_address']?></h3>
</div>
</div>
</div>
<!--End Contact Info One Single-->

<!--Start Contact Info One Single-->
<div class="col-xl-4 col-lg-4">
<div class="contact-info-one__single ml75">
<div class="icon-box">
<span class="icon-phone-auricular"></span>
</div>

<div class="content-box">
<p>Get In Touch</p>
<h3><a href="tel:+91" <?=$info[0]['company_mobile']?>>+91 <?=$info[0]['company_mobile']?></a></h3>
</div>
</div>
</div>
<!--End Contact Info One Single-->

<!--Start Contact Info One Single-->
<div class="col-xl-4 col-lg-4">
<div class="contact-info-one__single ml70">
<div class="icon-box">
<span class="icon-email2"></span>
</div>

<div class="content-box">
<p>Quick Email us</p>
<h3><a href="mailto:<?=$info[0]['company_email']?>"><?=$info[0]['company_email']?></a></h3>
</div>
</div>
</div>
<!--End Contact Info One Single-->
</div>
</div>
</div>
</section>
<!--End Contact Info One-->


<!--Start Footer One-->
<footer class="footer-one">
<div class="footer-one__bg" style="background-image: url(<?=base_url()?>assets/user_assets/images/backgrounds/footer-bg.jpg);">
</div>
<div class="shape1 float-bob-x"><img src="<?=base_url()?>assets/user_assets/images/shapes/footer-v1-shape1.png" alt="#"></div>
<div class="shape2 float-bob-y"><img src="<?=base_url()?>assets/user_assets/images/shapes/footer-v1-shape2.png" alt="#"></div>
<div class="shape3 float-bob-y"><img src="<?=base_url()?>assets/user_assets/images/shapes/footer-v1-shape3.png" alt="#"></div>
<div class="shape4 float-bob-x"><img src="<?=base_url()?>assets/user_assets/images/shapes/footer-v1-shape4.png" alt="#"></div>

<div class="footer-one__top">
<div class="container">
<div class="row">

<!--Start Footer One Single-->
<div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
<div class="footer-one__single footer-one__about">
<div class="footer-one__about-logo">
<a href="index-2.html"><img src="<?=base_url()?>assets/user_assets/images/resources/footer-logo.png" alt=""></a>
</div>

<div class="footer-one__about-text">
<p>Over 20 years of experience we’ll ensure you get the best guidance.</p>
</div>
</div>
</div>
<!--End Footer One Single-->

<!--Start Footer One Single-->
<div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
<div class="footer-one__single footer-one__post">
<div class="title-box">
<h3>Popular Post</h3>
</div>
<div class="footer-one__post-box">
<ul class="footer-one__post-list">
<li>
<div class="img-box">
<img src="<?=base_url()?>assets/user_assets/images/resources/footer-v1-img1.jpg" alt="#">
</div>

<div class="content-box">
<p><span class="icon-calendar2"></span> 02 Jan 2023</p>
<h4><a href="blog.html">Benefits of Cloud-powered <br>
disaster recovery network</a></h4>
</div>
</li>

<li>
<div class="img-box">
<img src="<?=base_url()?>assets/user_assets/images/resources/footer-v1-img2.jpg" alt="#">
</div>

<div class="content-box">
<p><span class="icon-calendar2"></span> 05 Jan 2023</p>
<h4><a href="blog.html">UX/UI design benefits for <br>
businesses in 2023</a></h4>
</div>
</li>
</ul>
</div>
</div>
</div>
<!--End Footer One Single-->

<!--Start Footer One Single-->
<div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
<div class="footer-one__single footer-one__links">
<div class="title-box">
<h3>Links</h3>
</div>
<div class="footer-one__links-box">
<ul class="footer-one__links-list">
<li>
<a href="#">Cookie Policy</a>
</li>
<li>
<a href="#">Careers</a>
</li>
<li>
<a href="#">Policy</a>
</li>
<li>
<a href="about.html">About us
</a>
</li>
<li>
<a href="contact.html">Contact Us</a>
</li>
<li>
<a href="pricing.html">Pricing & Plans</a>
</li>
</ul>
</div>
</div>
</div>
<!--End Footer One Single-->

<!--Start Footer One Single-->
<div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
<div class="footer-one__single footer-one__newsletter">
<div class="title-box">
<h3>Newsletter</h3>
</div>
<div class="footer-one__newsletter-box">
<div class="footer-one__newsletter-text1">
<p>Get the latest news other tips </p>
</div>
<form class="footer-one__newsletter-form">
<div class="footer-one__newsletter-form-input-box">
<div class="icon"><span class="icon-email2"></span></div>
<input type="email" placeholder="Email Address" name="email">
</div>

<div class="footer-one__newsletter-btn">
<button class="thm-btn" type="submit">
Subscribe
</button>
</div>
</form>

<div class="footer-one__newsletter-text2">
<p>Looking to kick-off your project in <br>
the next 30-90 days? </p>
</div>

</div>
</div>
</div>
<!--End Footer One Single-->
</div>
</div>
</div>

<div class="footer-one__bottom">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="footer-one__bottom-inner">
<div class="footer-one__bottom-left">
<div class="title-box">
<p>Social </p>
</div>

<div class="social-links">
<ul>
<li><a href="<?=$info[0]['facebook_link']?>"><span class="icon-facebook"></span></a></li>
<li><a href="<?=$info[0]['twitter_link']?>"><span class="icon-twitter"></span></a></li>
<li><a href="<?=$info[0]['linkedin_link']?>"><span class="icon-linkedin"></span></a></li>
<li><a href="<?=$info[0]['instagram_link']?>"><span class="icon-instagram"></span></a></li>
<li><a href="https://wa.me/91<?=$info[0]['whatsapp_mobile']?>"><span class="fa fa-whatsapp"></span></a></li>
</ul>
</div>
</div>


</div>
</div>
</div>
</div>
</div>

</footer>
<!--End Footer One-->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

<div class="logo-box">
<a href="index-2.html" aria-label="logo image"><img src="<?=base_url()?>assets/user_assets/images/resources/footer-logo.png"
width="143" alt="" /></a>
</div>
<!-- /.logo-box -->
<div class="mobile-nav__container"></div>
<!-- /.mobile-nav__container -->

<ul class="mobile-nav__contact list-unstyled">
<li>
<i class="fa fa-envelope"></i>
<a href="mailto:needhelp@packageName__.com">needhelp@ontech.com</a>
</li>
<li>
<i class="fa fa-phone-alt"></i>
<a href="tel:666-888-0000">666 888 0000</a>
</li>
</ul><!-- /.mobile-nav__contact -->
<div class="mobile-nav__top">
<div class="mobile-nav__social">
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-facebook-square"></a>
<a href="#" class="fab fa-pinterest-p"></a>
<a href="#" class="fab fa-instagram"></a>
</div><!-- /.mobile-nav__social -->
</div><!-- /.mobile-nav__top -->



</div>
<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
<div class="search-popup__overlay search-toggler"></div>
<!-- /.search-popup__overlay -->
<div class="search-popup__content">
<form action="#">
<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
<input type="text" id="search" placeholder="Search Here..." />
<button type="submit" aria-label="search submit" class="thm-btn">
<i class="icon-search"></i>
</button>
</form>
</div>
<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="<?=base_url()?>assets/user_assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/odometer/odometer.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/swiper/swiper.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/wow/wow.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/isotope/isotope.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/countdown/countdown.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/vegas/vegas.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/timepicker/timePicker.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/circleType/jquery.circleType.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js"></script>
<script src="<?=base_url()?>assets/user_assets/vendors/progress-bar/knob.js"></script>

<!-- template js -->
<script src="<?=base_url()?>assets/user_assets/js/ontech.js"></script>
</body>
</html>