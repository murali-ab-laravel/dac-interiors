<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>DAC - Interiors</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('theme/img/favicon/favicon.ico') !!}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{!! asset('theme/css/font-awesome/css/font-awesome.min.css') !!}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/bootstrap/bootstrap.min.css') !!}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/owl-carousel/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/owl-carousel/owl.theme.default.min.css') !!}">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/responsive-tabs/responsive-tabs.min.css') !!}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{!! asset('theme/css/magnific-popup/magnific-popup.min.css') !!}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/animate/animate.min.css') !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{!! asset('theme/css/responsive.css') !!}">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

      @include('theme.header')

      @yield('content')
      
    <!-- About -->
    <section id="about">

        <!-- About 01 -->
        <div id="about-01">

            <div class="content-box-lg">

                <div class="container">

                    <div class="row">

                        <!-- About Left Side -->
                        <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1s">

                            <div id="about-left">
                                <div class="vertical-heading">
                                    <h5>Who We Are</h5>
                                    <h2>A <strong>Story</strong><br>About Us</h2>
                                </div>
                            </div>

                        </div>

                        <!-- About Right Side -->
                        <div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1s">

                            <div id="about-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente aspernatur harum libero et nostrum sequi consequatur, tempore accusamus ab esse, voluptatem laudantium voluptas rerum? Laborum id ad alias saepe nemo,alias saepe ne consequatur.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur asperiores ad culpa similique, ratione dicta. Cumque, officia. Velit et inventore hic, unde, eum ea! Vitae dolores culpa molestias, in ratione.</p>
                            </div>

                        </div>

                    </div>

                    <!-- About Bottom -->
                    <div class="row">

                        <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">

                            <div id="about-bottom">
                                <img src="{!! asset('theme/img/logo/company-log.jpg') !!}" alt="About Us" class="img-responsive">
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- About 01 Ends -->

        <!-- About 02 -->
        <div id="about-02">

            <div class="content-box-md">

                <div class="container">

                    <div class="row">

                        <div class="col-md-4 col-sm-4 wow fadeInLeft">
                            <!-- About item 01 -->
                            <div class="about-item text-center">
                                <i class="fa fa-rocket"></i>
                                <h3>Mission</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eos asperiores nobis molestias nam. Ex quos dicta as.</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="2s">
                            <!-- About item 02 -->
                            <div class="about-item text-center">
                                <i class="fa fa-eye"></i>
                                <h3>Vision</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eos asperiores nobis molestias nam. Ex quos dicta as.</p>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4  wow fadeInRight">
                            <!-- About item 03 -->
                            <div class="about-item text-center">
                                <i class="fa fa-pencil"></i>
                                <h3>Passion</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eos asperiores nobis molestias nam. Ex quos dicta as.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- About 02 Ends -->

    </section>
    <!-- About Ends -->

    <!-- Statement -->
    <section id="statement">

        <div class="content-box-lg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 wow fadeIn">

                        <div id="tech-statement" class="text-center">

                            <h3><i class="fa fa-quote-left"></i> We design and develop services for customers of all sizes, <br> specializing in creating stylish, modern websites and online stores. <i class="fa fa-quote-right"></i> </h3>
                            <p>- Daniel Watrous -</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Statement Ends -->

    <!-- Portfolio -->
    <section id="portfolio">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 wow slideInLeft">

                        <div class="vertical-heading">
                            <h5>Find Out Work</h5>
                            <h2>Our <br>Amazing <strong>Work</strong></h2>
                        </div>

                    </div>

                    <div class="col-md-12">

                        <!-- Portfolio Items Filters -->
                        <div id="isotope-filters">

                            <button class="btn active" data-filter="*"><span>All</span></button>
                            <button class="btn" data-filter=".logo"><span>Logo</span></button>
                            <button class="btn" data-filter=".web"><span>Web</span></button>
                            <button class="btn" data-filter=".mobile"><span>Mobile</span></button>
                            <button class="btn" data-filter=".desktop"><span>Desktop</span></button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Portfolio Items Wrapper -->
            <section id="portfolio-wrapper" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                <div class="container-fluid">

                    <div class="row no-gutters">

                        <div id="isotope-container">

                            <div class="col-md-3 col-sm-6 col-xs-12 desktop">

                                <!-- Portfolio Item 01 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/001.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/001.jpg') !!}" class="img-responsive" alt="portfolio 01">

                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">

                                                <!-- Item Header -->
                                                <h3>Logo</h3>

                                                <!-- Item Strips -->
                                                <span></span>

                                                <!-- Item Description -->
                                                <p>Desktop, Design</p>

                                            </div>

                                        </div>
                                    </a>

                                </div>

                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web">
                                <!-- Portfolio Item 02 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/002.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/002.jpg') !!}" class="img-responsive" alt="portfolio 02">

                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">

                                                <!-- Item Header -->
                                                <h3>Photoshop</h3>

                                                <!-- Item Strips -->
                                                <span></span>

                                                <!-- Item Description -->
                                                <p>Web Design, Illustration</p>

                                            </div>

                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web mobile logo">
                                <!-- Portfolio Item 03 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/003.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/003.jpg') !!}" class="img-responsive" alt="portfolio 03">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Web Design
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    Video, web
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 logo web">
                                <!-- Portfolio Item 04 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/004.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/004.jpg') !!}" class="img-responsive" alt="portfolio 04">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Logo
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    desktop, Design
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web">
                                <!-- Portfolio Item 05 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/005.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/005.jpg') !!}" class="img-responsive" alt="portfolio 05">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Photoshop
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    Web Design, Illustration
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 logo desktop">
                                <!-- Portfolio Item 06 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/006.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/006.jpg') !!}" class="img-responsive" alt="portfolio 06">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Logo
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    desktop, Design
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web mobile">
                                <!-- Portfolio Item 07 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/007.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/007.jpg') !!}" class="img-responsive" alt="portfolio 07">

                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Photoshop
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    Web Design, Illustration
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web mobile">
                                <!-- Portfolio Item 08 -->
                                <div class="portfolio-item">

                                    <a href="{!! asset('theme/img/portfolio/008.jpg') !!}" title="Add Description">
                                        <img src="{!! asset('theme/img/portfolio/008.jpg') !!}" class="img-responsive" alt="portfolio 08">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!-- Item Header -->
                                                <h3>
                                                    Mobile Design
                                                </h3>
                                                <!-- Item Strips -->
                                                <span></span>
                                                <!-- Item Description -->
                                                <p>
                                                    Video, web
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </section>
    <!-- Portfolio Ends -->

    <!-- Testimonials -->
    <section id="testimonials">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4 wow slideInLeft">

                    <div class="vertical-heading">
                        <h5>Who We Are</h5>
                        <h2>What Our <br><strong>Customers</strong> Say</h2>
                    </div>

                </div>

                <div class="col-md-8 col-sm-8 wow fadeIn" data-wow-duration="2s">

                    <div id="testimonial-slider" class="owl-carousel owl-theme">

                        <!-- Testimonial 01 -->
                        <div class="testimonial">

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stars text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.</p>

                            <div class="author">

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="{!! asset('theme/img/testimonial/client-1.jpg') !!}" alt="client" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-des">
                                            <p>Joq Martin</p>
                                            <p>Senior Developer</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Testimonial 02 -->
                        <div class="testimonial">

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stars text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.</p>

                            <div class="author">

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="{!! asset('theme/img/testimonial/client-2.jpg') !!}" alt="client" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-des">
                                            <p>Joq Martin</p>
                                            <p>Senior Developer</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Testimonial 03 -->
                        <div class="testimonial">

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stars text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.</p>

                            <div class="author">

                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="{!! asset('theme/img/testimonial/client-3.jpg') !!}" alt="client" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-des">
                                            <p>Joq Martin</p>
                                            <p>Senior Developer</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Testimonials Ends -->

    <!-- Pricing -->
    <section id="pricing">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
                            <h5>Lovely Customers</h5>
                            <h2>Our Pricing</h2>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft">

                        <!-- Pricing Table 01 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Basic</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>29<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-01">
                                <a class="btn btn-general btn-yellow" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s">

                        <!-- Pricing Table 02 -->
                        <div class="pricing-table black">
                            <div class="type">
                                <h4>Unlimited</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>57<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-02">
                                <a class="btn btn-general btn-white" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight">

                        <!-- Pricing Table 03 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Professional</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>96<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-03">
                                <a class="btn btn-general btn-yellow" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Pricing Ends -->

    <!-- Stats -->
    <section id="stats">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 wow slideInLeft">

                        <div class="vertical-heading">
                            <h5>Fun Facts</h5>
                            <h2>We Deliver<br><strong>Excellent</strong> Services</h2>
                        </div>

                    </div>

                </div>

                <div class="row wow fadeInUp" data-wow-duration="2s">

                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 01 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-bar-chart"></i>
                            <h3 class="counter">25</h3>
                            <p>Years Experience</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 02 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-codepen"></i>
                            <h3 class="counter">476</h3>
                            <p>Projects Done</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 03 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-trophy"></i>
                            <h3 class="counter">115</h3>
                            <p>Awards Received</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 04 -->
                        <div class="stats-item text-center">
                            <i class="fa fa-users"></i>
                            <h3 class="counter">276</h3>
                            <p>Happy Clients</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Stats Ends -->

    <!-- Contact -->
    <section id="contact">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <!-- Contact Left -->
                        <div id="contact-left">

                            <div class="vertical-heading">
                                <h5>Who We Are</h5>
                                <h2>Get<br>In <strong>Touch</strong></h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias modi est itaque aliquam sit, minima esse nihil mollitia no.</p>

                            <div id="offices">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="office">
                                            <h4>United States</h4>
                                            <ul class="office-details">
                                                <li><i class="fa fa-mobile"></i><span>+(55) 879 58 87 46</span></li>
                                                <li><i class="fa fa-envelope"></i><span>support@solo.com</span></li>
                                                <li><i class="fa fa-map-marker"></i><span>524 Mina Street Building 05<br>Newyork, USA.</span></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="office">
                                            <h4>Australia</h4>
                                            <ul class="office-details">
                                                <li><i class="fa fa-mobile"></i><span>+(88) 457 87 74 87</span></li>
                                                <li><i class="fa fa-envelope"></i><span>support@solo.com</span></li>
                                                <li><i class="fa fa-map-marker"></i><span>507 Din Street Building 55 <br>Sydney, Australia.</span></li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <ul class="social-list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-md-6">

                        <!-- Contact Right -->
                        <div id="contact-right">
                            
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            <form action="contacts/store" method="post">
                                <h4>Send Message</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repell.</p>

                                <div class="row">
                                     {{ csrf_field() }}
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="first_name" name="first_name"  required placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="last_name" name="last_name"  required placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"  required placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="mobile_number" name="mobile_number"  required placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address"  required placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject"  required placeholder="Subject">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message"  required placeholder="Message"></textarea>
                                </div>

                                <div id="submit-btn">
                                    <button class="btn btn-general btn-yellow"  title="Submit" type="submit">Submit</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Contact Ends -->

        <!-- Google Map -->
    <section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <!-- <div id="map"></div> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11105.550242173847!2d76.20690737857544!3d10.228887757316787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081b8890158845%3A0x9a36ac4d3aa66034!2sDOC%20Home%20Interior%20Designers%20in%20Kodungallur%20%2C%20Thrissur!5e0!3m2!1sen!2sin!4v1634188108240!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- Google Map Ends -->

    @include('theme.footer')

    <!-- JQuery -->
    <script src="{!! asset('theme/js/jquery.min.js') !!}"></script>

    <!-- Bootstrap JS -->
    <script src="{!! asset('theme/js/bootstrap/bootstrap.min.js') !!}"></script>

    <!-- Owl Carousel JS -->
    <script src="{!! asset('theme/js/owl-carousel/owl.carousel.min.js') !!}"></script>

    <!-- Waypoints -->
    <script src="{!! asset('theme/js/waypoints/jquery.waypoints.min.js') !!}"></script>

    <!-- Responsive Tabs JS -->
    <script src="{!! asset('theme/js/responsive-tabs/jquery.responsiveTabs.min.js') !!}"></script>

    <!-- Isotope -->
    <script src="{!! asset('theme/js/isotope/isotope.pkgd.min.js') !!}"></script>

    <!-- Magnific Popup -->
    <script src="{!! asset('theme/js/magnific-popup/jquery.magnific-popup.min.js') !!}"></script>

    <!-- Counter -->
    <script src="{!! asset('theme/js/counter/jquery.counterup.min.js') !!}"></script>

    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

    <!-- Easing -->
    <script src="{!! asset('theme/js/easing/jquery.easing.1.3.min.js') !!}"></script>

    <!-- WOW JS -->
    <script src="{!! asset('theme/js/wow/wow.min.js') !!}"></script>

    <!-- Custom JS -->
    <script src="{!! asset('theme/js/script.js') !!}"></script>
</body>

</html>