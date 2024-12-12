
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image1']?>)">
            </div>
            <div class="page-header__gradient"
                style="background-image: url(<?=base_url()?>uploads/<?=$banners[0]['banner_image2']?>);"></div>
            <div class="shape1 float-bob-x"><img src="<?=base_url()?>uploads/<?=$banners[0]['banner_image3']?>" alt="#"></div>

            <div class="container">
                <div class="page-header__inner text-center">
                    <h2>Contact</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Contact Page-->
        <section class="contact-page">
            <div class="container">
                <div class="contact-page__top">
                    <div class="title text-center">
                        <h2>Please don't hesitate to contact us <br> with any inquiries or messages.</h2>
                        <p>You can also reach out to us by phone or email are many variations</p>
                    </div>

                    <ul class="list-unstyled">
                        <!--Start Contact Page Top single-->
                        <li class="contact-page__top-single">
                            <div class="icon">
                                <span class="icon-location-filled"></span>
                            </div>
                            <div class="content">
                                <h2>Address</h2>
                                <p><?=$info[0]['company_address']?></p>
                            </div>
                        </li>
                        <!--End Contact Page Top single-->

                        <!--Start Contact Page Top single-->
                        <li class="contact-page__top-single">
                            <div class="icon">
                                <span class="icon-phone-auricular"></span>
                            </div>
                            <div class="content">
                                <h2>Get In Touch</h2>
                                <p>
                                    <a href="tel:+91" <?=$info[0]['company_mobile']?>>+91 <?=$info[0]['company_mobile']?></a>
                                    
                                </p>
                            </div>
                        </li>
                        <!--End Contact Page Top single-->

                        <!--Start Contact Page Top single-->
                        <li class="contact-page__top-single">
                            <div class="icon">
                                <span class="icon-email2"></span>
                            </div>
                            <div class="content">
                                <h2>Email Address</h2>
                                <p>
                                    <a href="mailto:<?=$info[0]['company_email']?>"><?=$info[0]['company_email']?></a>
                                  
                                </p>
                            </div>
                        </li>
                        <!--End Contact Page Top single-->
                    </ul>
                </div>

                <div class="contact-page__bottom">
                    <div class="contact-page__bottom-pattern"
                        style="background-image: url(<?=base_url()?>assets/user_assets/images/pattern/contact-page-pattern.jpg);"> </div>
                    <div class="contact-page__bottom-inner">
                        <form action="<?=base_url()?>user/save_contact"  method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Mahfuz Riad" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Your Message here "></textarea>
                                    </div>
                                    <div class="contact-page__btn">
                                        <button type="submit" class="thm-btn">
                                            Send A Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact Page-->

      