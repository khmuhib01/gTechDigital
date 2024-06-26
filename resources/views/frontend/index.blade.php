@extends('frontend.include.layout')

@section('title', 'Gtech | SEO, Digital Marketing, Web Design & Development')
@section('description',
    'UK based, GTech Digital Offers Website Design and Development, App Development with expert
    Digital Marketing services. Specialises in Restaurant SEO and SMM.')

@section('content')


    <div class="main-banner">
        <div class="main-banner-mid">
            <h1>One Stop Digital Marketing Solutions</h1>
            <p>At GTech, we work with businesses across the UK crafting websites that engage customers and Digital Marketing
                strategies that deliver results.</p>
            <p>Our expert developer team is keen into designing products that portrays the right business proposition and
                message for your business. You understand the business best so we always collaborate with you in the whole
                process. </p>
        </div>


        {{-- <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-129">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/images/banner/gtech-slider.jpg') }}" alt="Gtech Slider1"
                            class="rev-slidebg">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-129-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                            data-y="['top','top','top','center']" data-voffset="['90','90','90','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text">
                                <!-- <span>best websolution</span> -->
                                <h2>WEB APPLICATIONS & WEBSITE DEVELOPMENT</h2>
                                <p>
                                    We deliver user friendly, well-designed and responsive web-applications and website. All
                                    the websites and web applications we develop are secured and platform independent.
                                </p>
                                <a class="btn-text" href="{{ route('web-development') }}"> read more</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/images/banner/Gtech-seo-slider3.jpg') }}" alt="Gtech SEO slide"
                            class="rev-slidebg ">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-131-layer-1"
                            data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                            data-y="['top','top','top','center']" data-voffset="['90','90','90','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text">
                                <!-- <span>best websolution</span> -->
                                <h2>Restaurant SEO</h2>
                                <p>
                                    Get your website optimised, increase online orders and build online image with SEO, SMM
                                    and online marketing.
                                </p>
                                <a class="btn-text" href="{{ route('service-restaurant-seo') }}"> read more</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div> --}}

    </div>
    <!--  Main Banner End Here-->
    <section id="" class="tw-features-area">
        <div class="container">
            {{-- <div class="row tw-mb-25">
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s">
                    <h1 class="column-title">One Stop Digital Marketing Solutions</h1>
                </div>
                <div class="col-md-7 col-md-offset-1 wow fadeInRight" data-wow-duration="1s">
                    <p class="features-text">At GTech, we work with businesses across the UK crafting websites that engage
                        customers and Digital Marketing strategies that deliver results.</p>
                    <p>
                        Our expert developer team is keen into designing products that portrays the right business
                        proposition and message for your business. You understand the business best so we always collaborate
                        with you in the whole process.
                    </p>
                </div>
            </div> --}}
            <!-- End Row 1 -->
            <div class="row">
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="{{ asset('assets/frontend/images/feature1.png') }}" alt="Web Development">
                            </div>
                            <!-- End Features icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Web Development</h3>
                        <a href="{{ route('web-development') }}" class="tw-readmore">Read More
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- Col End -->
                <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="{{ asset('assets/frontend/images/feature2.png') }}" alt="Digital Marketing">
                            </div>
                            <!-- End Features Icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Digital Marketing</h3>
                        <a href="{{ route('digital-marketing') }}" class="tw-readmore">Read More
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- end col -->
                <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="{{ asset('assets/frontend/images/feature3.png') }}" alt="App Development">
                            </div>
                            <!-- End Features Icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>App Development</h3>
                        <a href="{{ route('mobile-app-development') }}" class="tw-readmore">Read More
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <div class="col-lg-3 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="{{ asset('assets/frontend/images/feature3.png') }}" alt="Software Development">
                            </div>
                            <!-- End Features Icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Software Development</h3>
                        <a href="{{ route('custom-software-development') }}" class="tw-readmore">Read More
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- End col -->
            </div>
            <!-- End Row 2 -->
        </div>
        <!-- End Container -->
    </section>
    <!-- CONTENT -->

    <!-- About Section -->
    <div id="about-section" class="additional-info content-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 col-md-5 col-md-push-5 col-md-offset-1">
                    <img class="img-responsive center-block"
                        src="{{ asset('assets/frontend/images/web-design-development.png') }}"
                        alt="Web Development and Design">
                </div>
                <div class="col-sm-6 col-sm-pull-6 col-md-5 col-md-pull-5">
                    <div class="section-top">
                        <h2 class="section-title">Web Design and Development</h2>
                        <p>
                            User-friendly, responsive and engaging sites
                        </p>
                    </div>
                    <ul class="key-features list-unstyled">
                        <li><i class="ti-bar-chart"></i> Interactive bespoke websites for businesses</li>
                        <li><i class="ti-user"></i> Platform independent and secure websites </li>
                        <li><i class="ti-headphone-alt"></i> Customer experience enhancing web designs</li>
                        <li><i class="fa fa-money"></i> Ident creation that leaves a lasting impression </li>
                    </ul>
                    <a href="{{ route('web-development') }}"
                        class="btn btn-custom text-uppercase transition custom-radius">View
                        Details</a>
                </div>
            </div>
        </div>

    </div>
    <!-- About Section End-->
    <div class="digital-marketing additional-info content-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img class="info-image" src="{{ asset('assets/frontend/images/additional-info.png') }}"
                        alt="Additional Info">
                </div>
                <div class="col-sm-6">
                    <div class="section-top">
                        <h2 class="section-title">Digital Marketing Services</h2>
                        <p>
                            SEO and SMM
                        </p>
                    </div>
                    <ul class="key-features list-unstyled">
                        <li><i class="ti-bar-chart"></i> Local Google Ads</li>
                        <li><i class="ti-bar-chart"></i> Search and Keywords Optimisation</li>
                        <li><i class="ti-bar-chart"></i> Higher ranking in Google Search</li>
                        <li><i class="ti-bar-chart"></i> Social Media Presence and Engagement</li>
                        <li><i class="ti-bar-chart"></i> Affordable package</li>
                    </ul>
                    <a href="{{ route('digital-marketing') }}"
                        class="btn btn-custom text-uppercase transition custom-radius">View
                        Details</a>
                </div>
            </div>
        </div>
    </div>

    <div id="about-section" class="additional-info content-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 col-md-5 col-md-push-5 col-md-offset-1">
                    <img class="img-responsive" src="{{ asset('assets/frontend/images/custom-software-development.jpg') }}"
                        alt="Custom Software Development">
                </div>
                <div class="col-sm-6 col-sm-pull-6 col-md-5 col-md-pull-5">
                    <div class="section-top">
                        <h2 class="section-title">Custom Software Development</h2>
                        <p>
                            Custom-Tailored Managing Software and Systems
                        </p>
                    </div>
                    <ul class="key-features list-unstyled">
                        <li><i class="ti-bar-chart"></i> System Analysis and Audit</li>
                        <li><i class="ti-bar-chart"></i> Scalable Design</li>
                        <li><i class="ti-bar-chart"></i> Product Development</li>
                        <li><i class="ti-bar-chart"></i> Cost-Effective Customer Software</li>
                    </ul>
                    <a href="{{ route('custom-software-development') }}"
                        class="btn btn-custom text-uppercase transition custom-radius">View Details</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Project Section -->
    <section id="tw-features" class="software-development additional-info content-section tw-features-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img class="info-image" src="{{ asset('assets/frontend/images/mobile-app.png') }}"
                        alt="Additional Info">
                </div>
                <div class="col-sm-6">
                    <div class="section-top">
                        <h2 class="section-title">Mobile App Development</h2>
                        <p>
                            Build Apps that fulfill the purpose
                        </p>
                    </div>
                    <ul class="key-features list-unstyled">
                        <li><i class="ti-bar-chart"></i> Android and iOS development</li>
                        <li><i class="ti-bar-chart"></i> Cross-Platform development</li>
                        <li><i class="ti-bar-chart"></i> UI Design and Research</li>
                        <li><i class="ti-bar-chart"></i> Drive Mobile Strategies</li>
                    </ul>
                    <a href="{{ route('mobile-app-development') }}"
                        class="btn btn-custom text-uppercase transition custom-radius">View
                        Details</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners --}}

    <div id="partners-section" class="ptb-xs-60">
        <div class="container">
            <div class="title">
                <h4>Partners</h4>
                <h2>Agency Partner</h2>
            </div>
            <div class="partners-box">
                <div class="">
                    <img src="https://static.semrush.com/agency-directory/shared/badge.svg" alt="partner" class="partners-img">
                </div>
                <div class="">
                    <img src="https://reinforcelab.com/wp-content/uploads/2023/08/Wp-Engine-Agency-Partner-of-Reinforce-Lab.jpeg.webp" alt="partner" class="partners-img">
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    {{-- Partners --}}





    {{-- Testimonial --}}
    <div id="testimonial-section" class="ptb-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="title">
                        <h4>Testimonial</h4>
                        <h2>Best Client Testimonial</h2>
                    </div>
                    <div id="testimonial">
                        <div class="item ">
                            <div class="about-block pt-45 quote-icon">
                                <div class="text-box text-center">

                                    <div class="star">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            SEO Experts with Real Results!
                                        </p>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            They have an unmatched ability to share a vision and work to bring those
                                            aspirations to life. I would wholeheartedly recommend them for any web-based or
                                            software solution that you may require and we will continue working with them
                                            well into the future.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="client-name">
                                            <strong>Jonathan S</strong>
                                            <span>ASC Tyres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="about-block pt-45 quote-icon">
                                <div class="text-box text-center">

                                    <div class="star">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            Top-Notch SEO Services
                                        </p>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            I was initially skeptical about the impact of SEO on our business, but Gtech has completely changed my perspective. Their targeted approach has not only improved our rankings but also increased our organic traffic manifold. The team is knowledgeable and always on top of the latest search engine updates.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="client-name">
                                            <strong>Angela M</strong>
                                            <span>ASC Tyres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="about-block pt-45 quote-icon">
                                <div class="text-box text-center">

                                    <div class="star">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            Effective SEO Strategies
                                        </p>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            Partnering with Gtech for our SEO needs has been a game changer. Their strategic insights and optimizations have led to a significant boost in our online presence. We've seen a steady increase in qualified leads, all thanks to their meticulous SEO efforts.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="client-name">
                                            <strong>Marcus R</strong>
                                            <span>ASC Tyres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="about-block pt-45 quote-icon">
                                <div class="text-box text-center">

                                    <div class="star">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            SEO Mastery That Drives Growth
                                        </p>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            Gtech's SEO team is exceptional. They've managed to get several of our keywords to rank at the top, which has directly influenced our bottom line. Their commitment to staying ahead of SEO trends and their detailed reporting makes them a valuable partner.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="client-name">
                                            <strong>Emily V</strong>
                                            <span>ASC Tyres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item ">
                            <div class="about-block pt-45 quote-icon">
                                <div class="text-box text-center">

                                    <div class="star">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            Reliable and Strategic SEO Partner
                                        </p>
                                    </div>
                                    <div class="text-content">
                                        <p>
                                            If you're looking for a reliable SEO agency that delivers tangible results, Gtech is the way to go. Their comprehensive SEO audits and tailored strategies have greatly enhanced our site's performance. We appreciate their proactive approach and continuous efforts to optimize our digital assets.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div class="client-name">
                                            <strong>Derek L</strong>
                                            <span>ASC Tyres</span>
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
    {{-- End Testimonial --}}

@endsection
