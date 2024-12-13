@extends('information.layouts')
@section('information')
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"slide"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="information/assets/img/hero/hero_bg_1_1.jpg">
                        <img src="information/assets/img/catchytat/hero1/hero_b.png" alt="Hero Image">
                        <div class="bubble"></div>
                    </div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.5s">We Clean, You Shine</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.6s"> Quality Laundry Every Thread </h1>
                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.7s">the best slogan
                                for your laundry service will depend on your specific brand, target audience, and the
                                unique qualities of your service.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                <a href="{{route('serviceOrder')}}" class="th-btn style2" data-ani="slideinup" data-ani-delay="0.9s">Wash My Clothes
                                    </a>
                                <a href="contact.html" class="th-btn style5" data-ani="slideinup" data-ani-delay="0.9s">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="information/assets/img/hero/hero_bg_1_2.jpg">
                        <img src="information/assets/img/catchytat/hero1/hero_c.png" alt="Hero Image">
                        <div class="bubble"></div>
                    </div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.5s">We Clean, You Shine</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.6s"> Quality Laundry Every Thread </h1>
                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.7s">the best slogan
                                for your laundry service will depend on your specific brand, target audience, and the
                                unique qualities of your service.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                <a href="{{route('serviceOrder')}}" class="th-btn style2" data-ani="slideinup" data-ani-delay="0.9s">Wash My Clothes
                                </a>
                                <a href="contact.html" class="th-btn style5" data-ani="slideinup" data-ani-delay="0.9s">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="information/assets/img/hero/hero_bg_1_3.jpg">
                        <img src="information/assets/img/catchytat/hero1/hero_e.png" alt="Hero Image">
                        <div class="bubble"></div>
                    </div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.5s">We Clean, You Shine</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.6s"> Quality Laundry Every Thread </h1>
                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.7s">the best slogan
                                for your laundry service will depend on your specific brand, target audience, and the
                                unique qualities of your service.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                <a href="{{route('serviceOrder')}}" class="th-btn style2" data-ani="slideinup" data-ani-delay="0.9s">Wash My Clothes
                                </a>
                                <a href="contact.html" class="th-btn style5" data-ani="slideinup" data-ani-delay="0.9s">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-animated-bubble">
        <img src="information/assets/img/shape/bubble_1.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_2.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_3.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_4.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_5.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_6.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_7.png" alt="Laun">
        <img src="information/assets/img/shape/bubble_8.png" alt="Laun">
    </div>
    <div class="icon-box">
        <button data-slider-prev="#heroSlide1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
        <button data-slider-next="#heroSlide1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
    </div>

</div>
<!--======== / Hero Section ========--><!--==============================
About Area
==============================-->
<div class="about-sec overflow-hidden space-top" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="img-box1">
                    <div class="img1">
                        <img src="information/assets/img/catchytat/hero1/igcactchytat.png" alt="About">
                    </div>
                    <div class="img2">
                        <img src="information/assets/img/catchytat/hero1/igcactchytat.png" alt="About">
                    </div>
                    <div class="th-experience jump">
                        <h3 class="experience-year"><span class="counter-number">10</span>+</h3>
                        <p class="experience-text">Years</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xl-4 wow fadeInRight">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">About Us</span>
                        <h2 class="sec-title mb-20">Discover Laundry Excellence with catchyTat</h2>
<p class="about-desc">At catchyTat, we offer a comprehensive range of premium laundry services including wash and fold, dry cleaning, professional ironing, stain removal, and expert care for delicate fabrics and special garments. Trust us to deliver exceptional results every time, with convenient pickup and delivery for your convenience.</p>

                    </div>
                    <div class="checklist list-two-column">
                        <ul>
                            <li>Pickup and Delivery Service</li>
                            <li>Energy-Efficient Machines</li>
                            <li>Same-Day or Express Service</li>
                            <li>Folding Preferences</li>
                            <li>Hanging or Bagging Options</li>
                            <li>Satisfaction Guarantee</li>
                        </ul>
                    </div>
                    <div class="btn-group mt-30 justify-content-start">
                        <a href="{{route('serviceOrder')}}" class="th-btn">Wash My Clothes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--==============================
feature Area
==============================-->
<div class="overflow-hidden space" id="feature-area">
    <div class="container">
        <div class="row gy-4  justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon">
                        <img src="information/assets/img/icon/feature_1_1.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">100% Happiness Guarantee</h3>
                        <p class="feature-item_text">Emphasize the use of high-quality detergents, fabric softeners.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInDown">
                    <div class="feature-item_icon">
                        <img src="information/assets/img/icon/feature_1_2.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Free Collection & Delivery</h3>
                        <p class="feature-item_text">Enjoy hassle-free laundry with pickup and delivery at your convenience .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp">
                    <div class="feature-item_icon">
                        <img src="information/assets/img/icon/feature_1_3.svg" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">24/7 Dedicated Support</h3>
                        <p class="feature-item_text">Always here to assist you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Service Area
==============================-->
{{-- <section class="bg-top-center space" data-bg-src="information/assets/img/bg/service_bg_1.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Best Services</span>
            <h2 class="sec-title">Our Best Laundry Services For You!</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_1.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_1.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Dry Cleaning</a></h3>
                                <p class="service-box_text">Dry cleaning is a method of cleaning clothing and textiles that uses a solvent other than water to remove dirt, stains.</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_2.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_2.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Wash & Fold</a></h3>
                                <p class="service-box_text">Wash and fold (also known as drop-off laundry or fluff and fold) is a laundry service offered by many laundromats.</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_3.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_3.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Ironing/Pressing</a></h3>
                                <p class="service-box_text">Ironing or pressing is the process of using a heated iron or press to smooth out wrinkles, creases, and remove fabric</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_4.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_4.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Garments Transformed</a></h3>
                                <p class="service-box_text">Garments Transformed" is a term that can refer to various aspects of clothing and fashion. It may be used in different.</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_5.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_5.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Household Textile Care</a></h3>
                                <p class="service-box_text">Household textile care refers to the maintenance and cleaning of various textiles and fabrics used in and around a home</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-box">
                            <div class="service-box_wrapper">
                                <div class="service-box_img">
                                    <img src="information/assets/img/service/service_box_1.jpg" alt="img">
                                </div>
                                <div class="service-box_icon">
                                    <img src="information/assets/img/icon/service_box_6.svg" alt="Icon">
                                </div>
                            </div>
                            <div class="box-content" data-bg-src="information/assets/img/shape/service_shape_1.png">
                                <h3 class="box-title"><a href="service-details.html">Leather & Suede Care</a></h3>
                                <p class="service-box_text">Leather and suede are durable and stylish materials often used in clothing, footwear, accessories, and furniture</p>
                                <a href="service-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#serviceSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#serviceSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section> --}}
<!--==============================
Contact Info Area
==============================-->
<div class="space-bottom">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-6">
                <div class="contact-feature" data-bg-src="information/assets/img/catchytat/hero1/outgoing_3575528.png">
                    <div class="box-icon">
                        <i class="fa-light fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <span class="contact-feature_subtitle">Call Us For Service</span>
                        <h3 class="box-title"><a href="tel:+1636543569">+91 90562 23996</a></h3>
                        <p class="box-text">Call 24/7 Anytime For Our Laundry Servicing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-feature" data-bg-src="information/assets/img/catchytat/hero1/email_873388.png">
                    <div class="box-icon">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <span class="contact-feature_subtitle">Email Us Anytime For Service</span>
                        <h3 class="box-title"><a href="mailto:connect@catchytat.com">connect@catchytat.com</a></h3>
                        <p class="box-text">Email 24/7 Anytime For Our Laundry Servicing. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--==============================
Feature Area
==============================-->
<div class="features-area position-relative overflow-hidden bg-top-center space" data-bg-src="information/assets/img/catchytat/hero1/elegant2.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="choose-feature-area">
                    <div class="title-area mb-25">
                        <span class="sub-title style1">Why Choose Us</span>
                        <h2 class="sec-title">We Take Pride in Perfecting Your Clothes Laundry</h2>
                        <p class="sec-text">We prioritize the highest standards of cleanliness and garment care. Our
                            experienced team uses top-quality detergents and equipment to ensure your clothes are
                            returned
                            fresh and spotless. We offer hassle-free pickup and delivery services, saving you time and
                            effort.</p>
                    </div>
                    <div class="checklist list-two-column why-checklist">
                        <ul>
                            <li><span class="check-img"><img src="information/assets/img/icon/check.svg" alt=""></span> Quality
                                Assurance</li>
                            <li><span class="check-img"><img src="information/assets/img/icon/check.svg" alt=""></span>Expert
                                Handling</li>
                            <li><span class="check-img"><img src="information/assets/img/icon/check.svg" alt=""></span>Transparent
                                Pricing</li>
                            <li><span class="check-img"><img src="information/assets/img/icon/check.svg" alt=""></span>Folding
                                Preferences</li>
                        </ul>
                    </div>
                    <div class="btn-group mt-40">
                        <a href="{{route('serviceOrder')}}" class="th-btn style3">Wash My Clothes</a>
                        <div class="about-profile">
                            <div class="about-avater">
                                <img src="information/assets/img/catchytat/hero1/teamwork_1256650.png" alt="about">
                            </div>
                            <div class="media-body">
                                <h5 class="box-title mb-0">Nitin Vaid</h5>
                                <p class="desig mb-0">Managing Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="video-box1">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="8%" data-right="0%"><img src="information/assets/img/shape/like.png" alt="shape">
    </div>
</div><!--==============================
Process Area
==============================-->
<section class="position-relative overflow-hidden space-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Work Process</span>
            <h2 class="sec-title">How We Work It!</h2>
        </div>
        <div class="step-wrap">
            <div class="process-line"></div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="process-card ">
                        <div class="box-icon">
                            <img src="information/assets/img/icon/process_card_1.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <div class="box-top">
                                <p class="box-number">Step - 01</p>
                                <h3 class="box-title">Schedule Your Service</h3>
                            </div>
                            <p class="box-text">Begin by scheduling your laundry service. You can choose from our convenient options</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="process-card active">
                        <div class="box-icon">
                            <img src="information/assets/img/icon/process_card_2.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <div class="box-top">
                                <p class="box-number">Step - 02</p>
                                <h3 class="box-title">Expert Cleaning Process</h3>
                            </div>
                            <p class="box-text">Once we receive your laundry, our skilled team takes over. Your cloth are sorted based.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="process-card ">
                        <div class="box-icon">
                            <img src="information/assets/img/icon/process_card_3.svg" alt="icon">
                        </div>
                        <div class="box-content">
                            <div class="box-top">
                                <p class="box-number">Step - 03</p>
                                <h3 class="box-title">Packaging and Delivery</h3>
                            </div>
                            <p class="box-text">We take pride in using eco-friendly packaging materials. If you've opted for our pickup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Cta Area
==============================-->
<section class="cta-sec" data-pos-for=".team-area" data-sec-pos="bottom-half">
    <div class="container th-container">
        <div class="cta-area" data-overlay="title" data-opacity="9" data-bg-src="information/assets/img/catchytat/hero1/igcactchytat.png">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area mb-0 text-center text-lg-start">
                        <span class="sub-title style1">Get Free Contact For Services</span>
                        <h2 class="sec-title text-white">You Get Premium Laundry Service From Us!</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="cta-group justify-content-lg-end justify-content-center">
                        <a href="{{route('serviceOrder')}}" class="th-btn style2">Wash my Clothes</a>
                        <a href="{{route('contactUs')}}" class="th-btn style3">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Team Area
==============================-->
{{-- <section class="team-area space" data-bg-src="information/assets/img/bg/team_bg_1.jpg">
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title">Expert Team</span>
            <h2 class="sec-title">Our Expert Workers</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="information/assets/img/team/team_1_1.jpg" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/" tabindex="0"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <!-- <div class="plus-btn"> <i class="fa-solid fa-plus"></i></div> -->
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">William James</a></h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="information/assets/img/team/team_1_2.jpg" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/" tabindex="0"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <!-- <div class="plus-btn"> <i class="fa-solid fa-plus"></i></div> -->
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">Jasmin Mentara</a></h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="information/assets/img/team/team_1_3.jpg" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/" tabindex="0"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <!-- <div class="plus-btn"> <i class="fa-solid fa-plus"></i></div> -->
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">Danial Facundo</a></h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="information/assets/img/team/team_1_4.jpg" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/" tabindex="0"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <!-- <div class="plus-btn"> <i class="fa-solid fa-plus"></i></div> -->
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">Ema Margret</a></h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="information/assets/img/team/team_1_1.jpg" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/" tabindex="0"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <!-- <div class="plus-btn"> <i class="fa-solid fa-plus"></i></div> -->
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">Henry Haninkot</a></h3>
                                    <span class="team-desig">Dry Cleaner</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>

    </div>
</section> --}}


<!--==============================
Faq Area
==============================-->
<div class="  space overflow-hidden" id="faq-sec">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6 text-center text-xl-start align-self-center">
                <div class="">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title style1">FAQ</span>
                        <h2 class="sec-title">Frequently Asked Have Any Questions</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">


                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What Services Do You Offer?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We offer washing, drying, ironing, and full fabric care for clothes, shoes, curtains, blankets, and more, ensuring your items are fresh and well-treated every time!</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"> Can you handle delicate fabrics?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes, we take special care with delicate fabrics, ensuring they are washed, dried, and ironed with the utmost attention to preserve their quality.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> Do you clean shoes and blankets?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Absolutely! We offer cleaning services for shoes, blankets, curtains, and other specialty items, ensuring they are treated with care.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"> How quickly can I expect my laundry to be ready?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We strive to provide quick turnaround times, typically returning your freshly cleaned and ironed items within 24-48 hours, depending on the service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-img1 ps-xl-4">
                    <div class="img1">
                        <img src="information/assets/img/catchytat/hero1/shoes.png" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Counter Area
==============================-->
<div class="overflow-hidden space-bottom">
    <div class="container">
        <div class="counter-card-wrap">
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">16</span>M+</h2>
                    <p class="box-text">Laundry & Dry Complete</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">18</span>k+</h2>
                    <p class="box-text">Garments in Circulation</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number"><span class="counter-number">12</span>M+</h2>
                    <p class="box-text">Satisfied Our Customer</p>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div><!--==============================
Testimonial Area
==============================-->
<section class="testi-area " id="testi-sec" data-bg-src="information/assets/img/catchytat/hero1/cloth.png">
    <div class="shape-mockup" data-bottom="0" data-right="0"><img src="information/assets/img/catchytat/hero1/didi.png" alt="shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="testi-card-slide">
                    <div class="title-area">
                        <span class="sub-title style1">Testimonials</span>
                        <h2 class="sec-title text-white">Our Clients Feedback</h2>
                    </div>
                    <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"effect":"slide"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_wrapp">
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater global-img">
                                                <img src="information/assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                            </div>
                                            <div class="star-icon">
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-regular fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="testi-card_wrapper">
                                            <p class="testi-card_text">“If you opted for pickup and delivery, our dedicated team will bring your laundry back to your doorstep at the scheduled time. For drop-offs, your clean clothes will be waiting.”</p>
                                            <div class="testimonial-author">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Alex Michel</h3>
                                                    <span class="testi-card_desig">Founder CEO</span>
                                                </div>
                                                <div class="testi-quote">
                                                    <img src="information/assets/img/icon/quote.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-card_wrapp">
                                        <div class="testi-card_profile">
                                            <div class="testi-card_avater global-img">
                                                <img src="information/assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                            </div>
                                            <div class="star-icon">
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-solid fa-star"></i></a>
                                                <a href="#"><i class="fa-regular fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="testi-card_wrapper">
                                            <p class="testi-card_text">“If you opted for pickup and delivery, our dedicated team will bring your laundry back to your doorstep at the scheduled time. For drop-offs, your clean clothes will be waiting.”</p>
                                            <div class="testimonial-author">
                                                <div class="testi-card_content">
                                                    <h3 class="testi-card_name">Jenny Wilson</h3>
                                                    <span class="testi-card_desig">Project Manager</span>
                                                </div>
                                                <div class="testi-quote">
                                                    <img src="information/assets/img/icon/quote.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="testi-area-wrapper">
                    <form action="mail.php" method="POST" class="testi-form input-smoke ajax-contact">
                        <h3 class="sec-title text-center">Book An Appointment</h3>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    <option value="Dry Cleaning">Dry Cleaning</option>
                                    <option value="Wash & Fold">Wash & Fold</option>
                                    <option value="Ironing/Pressing">Ironing/Pressing</option>
                                    <option value="Garments Transformed">Garments Transformed</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                    <option value="Household Textile Care">Household Textile Care</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn btn-fw">Appointment Now</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Price Area
==============================-->
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">What We Offer</span>
            <h2 class="sec-title">Affordable Price Package</h2>
        </div>
        <div class="row gy-4 justify-content-center">

            <div class="col-xl-4 col-md-6">
                <div class="price-card ">
                    <h3 class="box-title">Dry Cleaning Price</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price"><span class="currency">$</span>80</h4>
                        <p class="price-card_text">20 CLOTHES PER MONTH</p>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>3 Button-Down Shirts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li class="unavailable">8 Towel</li>
                                <li class="unavailable">2 Set of Bed Sheets</li>
                            </ul>
                        </div>
                        <a href="price.html" class="th-btn style3">Choose Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-card active">
                    <h3 class="box-title">Dry Clean / Laundry</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price"><span class="currency">$</span>140</h4>
                        <p class="price-card_text">28 CLOTHES PER MONTH</p>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>3 Button-Down Shirts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li>8 Towel</li>
                                <li class="unavailable">2 Set of Bed Sheets</li>
                            </ul>
                        </div>
                        <a href="price.html" class="th-btn style3">Choose Packages</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="price-card ">
                    <h3 class="box-title">Dry Clean / Iron / Fold</h3>
                    <div class="price-card_content">
                        <h4 class="price-card_price"><span class="currency">$</span>180</h4>
                        <p class="price-card_text">30 CLOTHES PER MONTH</p>
                        <div class="available-list">
                            <ul>
                                <li>4 T-Shirts</li>
                                <li>3 Button-Down Shirts</li>
                                <li>7 Pairs of Underwear</li>
                                <li>6 Pairs of Socks</li>
                                <li>8 Towel</li>
                                <li>2 Set of Bed Sheets</li>
                            </ul>
                        </div>
                        <a href="price.html" class="th-btn style3">Choose Packages</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--==============================
Brand Area
==============================-->
<div class="brand-area py-5 mt-1 bg-theme2">
    <div class="container th-container">
        <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_6.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_8.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <img src="information/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!--==============================
Blog Area
==============================-->
{{-- <section class="overflow-hidden space" id="blog-sec" data-bg-src="information/assets/img/bg/blog_bg_1.jpg">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1">Blog Post</span>
                    <h2 class="sec-title">Latest News & Updates</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn">View More Post</a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_1.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>15 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">What Kind of Fabrics Really Need Dry Cleaning</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_2.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>16 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">The Art of Dry Cleaning Care for Your Clothes</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_3.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>17 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Clean and Fresh The World of Dry Cleaning</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_4.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>19 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Caring for Your Clothes the World of Dry Cleaning</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_1.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>15 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">The Art of Dry Cleaning Reviving Fabrics with Car</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="information/assets/img/blog/blog_1_2.jpg" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-user"></i>By Laun</a>
                                    <a href="blog.html"><i class="far fa-calendar"></i>16 nov, 2023</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">The Art of Dry Cleaning expert Garment Care</a></h3>
                                <a href="blog-details.html" class="th-btn border">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section> --}}

<!--==============================
Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="information/assets/img/catchytat/hero1/bed2.png">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-xl-4">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="home-laundry-services.html"><img src="information/assets/img/logo-white.svg" alt="Laun"></a>
                            </div>
                            <p class="about-text">Begin by scheduling your laundry service. You can choose from our convenient options Any
                                visible stains are pre-treated to ensure.</p>
                            <div class="footer-info-wrapper">
                                <div class="footer-info">
                                    <div class="footer-info_icon">
                                        <i class="fa-sharp fa-solid fa-phone"></i>
                                    </div>
                                    <a class="text-inherit" href="tel:+256214203215">+256 214 203 215</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <a class="text-inherit" href="mailto:info@laun.com">info@laun.com</a>
                                </div>
                                <div class="footer-info">
                                    <div class="footer-info_icon">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <span> Monday to Saturday: 9AM - 8PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Our Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu style2">
                                <li><a href="service.html">Dry Cleaning</a></li>
                                <li><a href="service.html">Quick Wash Express</a></li>
                                <li><a href="service.html">Dust Removal</a></li>
                                <li><a href="service.html">Stain Master Pro</a></li>
                                <li><a href="service.html">Damage Repair</a></li>
                                <li><a href="service.html">Eco Fresh Laundryy</a></li>
                                <li><a href="service.html">Sanitize clothes</a></li>
                                <li><a href="service.html">Bright Blitz Laundry</a></li>
                                <li><a href="service.html">Carpet Rinse</a></li>
                                <li><a href="service.html">Pure Care Laundering</a></li>
                                <li><a href="service.html">Laundry Service</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="newsletter-widget style2">
                            <h4 class="box-title text-white">Sign Up For Newsletter</h4>
                            <div class="footer-search-contact mt-25">
                                <form>
                                    <input class="form-control" type="email" placeholder="Enter your email">
                                </form>
                                <div class="footer-btn mt-10">
                                    <button type="submit" class="th-btn style2 btn-fw">Subscribe Now</button>
                                </div>
                                <div class="form-group mt-20">
                                    <input type="checkbox" id="html">
                                    <label for="html">I agree to all terms and policies</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="home-laundry-services.html">Laun</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="animation-bubble">
        <div class="bubble-1"></div>
        <div class="bubble-2"></div>
        <div class="bubble-3"></div>
        <div class="bubble-4"></div>
        <div class="bubble-5"></div>
        <div class="bubble-6"></div>
        <div class="bubble-7"></div>
        <div class="bubble-8"></div>
        <div class="bubble-9"></div>
        <div class="bubble-10"></div>
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="0%"><img src="information/assets/img/shape/footer_shape_1.png" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-right="0%"><img src="information/assets/img/shape/footer_shape_2.png" alt="shape">
    </div>
</footer>

<!--********************************
        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>

@endsection
