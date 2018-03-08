<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Redbin">
    <meta name="description" content="Mergfil Pharma">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>MergFil Pharma Corporation - About Us</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style_about.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!--Mainmenu-area-->
<div class="navbar navbar-inverse navbar-fixed-top mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo">
                <img src="/assets/images/logo.png" class="img-responsive">
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#home-page">Vision</a>
                </li>
                <li>
                    <a href="#mission">Mission</a>
                </li>
                <li>
                    <a href="#values">Values</a>
                </li>
                <li>
                    <a href="#faq">FAQ</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--Mainmenu-area/-->


<!--Header-area-->
<header class="header-area overlay full-height relative v-center" id="home-page">
    <div class="absolute anlge-bg"></div>
    <div class="container">
        <div class="row v-center">
            <div class="hidden-md hidden-lg col-xs-12 col-md-7 header-text">
                <img src="/assets/carousel/1tinding_galing.png" class="img img-responsive">
            </div>
            <div class="col-xs-12 col-md-7 header-text">
                <h2>Mergfil Pharma Corporation</h2>
                <p>To be firmly recognized as a healthcare industry leader in the country that provides safe and
                    affordable
                    healthcare products that provide optimum health.
                </p>
                <a href="#" class="button white">Watch video</a>
            </div>
            <div class="hidden-xs hidden-sm col-md-5 text-right">
                <?php
                $path = './assets/carousel';
                $files = scandir($path);
                $files = array_diff(scandir($path), array('.', '..'));
                ?>

                <div class="screen-box screen-slider">
                    <?php
                    foreach ($files as $picture) {
                        ?>
                        <div class="item">
                            <img src="/assets/carousel/<?php echo $picture; ?>" alt="" class="img-responsive"
                                 style="width:90%;height:auto;">
                        </div>

                    <?php
                        }
                    ?>
                </div>

            </div>



        </div>
    </div>
    </div>
</header>
<!--Header-area/-->


<!--Feature-area-->
<section class="section-padding" id="mission">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>COMPANY MISSION</h2>
                    <p>To realize our vision, we dedicate ourselves to our:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-sm-offset-1">
                <div class="box">
                    <div class="box-icon">
                        <img src="/assets/flat-icons/network.png" class="img img-responsive" alt="">
                    </div>
                    <h4>CUSTOMERS</h4>
                    <p>To address our fellowmen’s pursuit of optimum health.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="box">
                    <div class="box-icon">
                        <img src="/assets/flat-icons/business-presentation.png"  class="img img-responsive" alt="">
                    </div>
                    <h4>SHAREHOLDERS</h4>
                    <p>To provide a healthy return on investment.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="box">
                    <div class="box-icon">
                        <img src="/assets/flat-icons/boss-1.png" class="img img-responsive" alt="">
                    </div>
                    <h4>BUSINESS PARTNERS</h4>
                    <p>To be partner for delivering value to our customers and community.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="box">
                    <div class="box-icon">
                        <img src="/assets/flat-icons/id-card.png" class="img img-responsive" alt="">
                    </div>
                    <h4>EMPLOYEES</h4>
                    <p>To be an enriching place to develop people and a platform for excellence.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2">
                <div class="box">
                    <div class="box-icon">
                        <img src="/assets/flat-icons/collaboration.png" class="img img-responsive" alt="">
                    </div>
                    <h4>COMMUNITY</h4>
                    <p>To be an important part of the community.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feature-area/-->

<section class="values-area angle-bg overlay section-padding" id="values">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>GREAT LIFE</h2>
                        <p>We work hand in hand to achieve our goal and that is to have a GREAT LIFE we deserve.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active row">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>God-centered</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We are Led and Empowered by the Spirit of God. God owns everything, we are
                                            merely
                                            stewards or managers of wealth. By keeping and putting God first, He will
                                            provide everything else that we need.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Results-oriented</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We are focused on making things to happen. We have a mind set of getting
                                            things
                                            done by being Flexible and Driving it into action. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Exceptional</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We strive to deliver exceptional service to all we encounter. Our commitment
                                            to this level of service crosses all borders, whether internally with
                                            co-workers
                                            or externally with our customers and partners. Our belief is to be the
                                            absolute
                                            best at what we do and deliver our best to all we serve. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Agility</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We create value and continuously delight our customers while promoting and
                                            responding
                                            to changes in our environment. It is achieved by being alert to both
                                            internal
                                            and environmental changes - opportunities as well as challenges - and the
                                            ability to use available resources in a timely, flexible, affordable and
                                            relevant manner, in order to respond to those changes effectively. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Trustworthy and reliability</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>The personal character of being honest is our individual responsibility to
                                            ourselves,
                                            our team members, and our clients; personal integrity builds team integrity.
                                            That if we are honest with our clients and customers, then they will trust
                                            us and be honest with us. The word-of-mouth referrals and our reputation
                                            are our most effective advertising in this very competitive industry.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Leadership</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We lead by connecting organizational goals to our employees’ personal values.
                                            We are fully and willingly committed to a new and sustainable course of
                                            action
                                            to meet the commonly agreed objectives whilst having commonly held values.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Innovation</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>Constantly strive to redefine the standard of excellence in everything we do.
                                            Therefore, we are open to ideas that challenge the conventional views and
                                            drive innovation. The only constant in life is change and we believe that
                                            in order to stay relevant we must constantly improve with society's changing
                                            needs.

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Focus</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>Employee Focus- the strength of our company lies in the strength of our
                                            people.
                                            By constantly focusing on empowering our people, challenging our people to
                                            new heights and by fostering a collaborative and mutually supportive
                                            environment,
                                            we believe that this builds a rewarding long term career for our people as
                                            well as delivering a better value proposition to our customers and business
                                            partners. Customer Focus - We put ourselves in our customer’s shoes when
                                            we are making decisions. We want to be their top-of-mind and top-of-heart
                                            choice. Business Partner Focus - We put our client’s interest ahead of our
                                            own. We focus on building personal and long-term relationships.

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="v-center">
                                <div class="col-xs-12 col-md-12">
                                    <div class="caption-title" data-animation="animated fadeInUp">
                                        <h2>Excellence</h2>
                                    </div>
                                    <div class="caption-desc" data-animation="animated fadeInUp">
                                        <p>We strive to deliver the highest quality and value possible to make our
                                            customers
                                            happy and satisfied.

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="hidden-xs hidden-sm carousel-indicators caption-indector">
                        <li data-target="#caption_slide" data-slide-to="0" class="active">
                            <strong>G</strong>God-centered
                        </li>
                        <li data-target="#caption_slide" data-slide-to="1">
                            <strong>R</strong>Result-oriented
                        </li>
                        <li data-target="#caption_slide" data-slide-to="2">
                            <strong>E</strong>Exceptional
                        </li>
                        <li data-target="#caption_slide" data-slide-to="3">
                            <strong>A</strong>Agility
                        </li>
                        </li>
                        <li data-target="#caption_slide" data-slide-to="4">
                            <strong>T</strong>Trustworthy and reliability
                        </li>
                        </li>
                        <li data-target="#caption_slide" data-slide-to="5">
                            <strong>L</strong>Leadership
                        </li>
                        </li>
                        <li data-target="#caption_slide" data-slide-to="6">
                            <strong>I</strong>Innovation
                        </li>
                        </li>
                        <li data-target="#caption_slide" data-slide-to="7">
                            <strong>F</strong>Focus
                        </li>
                        </li>
                        <li data-target="#caption_slide" data-slide-to="8">
                            <strong>E</strong>Excellence
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Frequently Asked Questions</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">What
                                is LivEver?</a>
                        </h4>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <p>LivEver Is a Total Body Food Supplement that helps promote Healthy Liver, Good Sleep,
                                Good
                                Digestion, High Energy, Mental Alertness and Good Blood Circulation. The product has
                                the following potent and natural components such as Milk Thistle Extract (Silybum
                                Marianum),
                                Phosphatidylcholine, Turmeric Powder (Curcuma Longa), Alpha Lipoic Acid, Calcium
                                Pantothenate,
                                Zinc, Thiamin (Vitamin B1), Pyridoxine (Vitamin B6) and Cyanocobalamin (Vitamin B12).
                                LivEver is a powerful anti- oxidant with anti-inflammatory effects that promote TOTAL
                                BODY WELL BEING.

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Why is it called
                                LivEver?
                            </a>
                        </h4>
                        <div id="collapse2" class="panel-collapse collapse">
                            <p>We firmly believe that in order to LIVE a better life we must achieve our best state of
                                health
                                EVER! LIVE LONGER WITH LivEver! TINDING TULOG. TINDING GISING. TINDING GALING!

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Is LivEver a drug?</a>
                        </h4>
                        <div id="collapse3" class="panel-collapse collapse">
                            <p>LivEver is a Food Supplement that is FDA approved as safe and effective.
                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Where is it
                                Manufactured:</a>
                        </h4>
                        <div id="collapse4" class="panel-collapse collapse">
                            <p>LivEver is manufactured in Numan 172 C. Raymundo Ave. Maybunga, Pasig City Distributed by
                                Mergfil Pharma Corp. in Makati City

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What makes it different
                                among any other food supplements?</a>
                        </h4>
                        <div id="collapse5" class="panel-collapse collapse">
                            <p>The potent and natural multi components of LivEver Capsule act synergistically as
                                anti-oxidant
                                and anti-inflammatory which fights body inflammation, enhances brain function, supports
                                joint and muscle health and promotes youthful skin. Moreover, it contains Alpha Lipoic
                                Acid that recycles Vitamin C, Vitamin E, Glutathione and COQ10 that have protective
                                abilities
                                against diseases making it different among any other food supplement in the Philippine
                                market today.

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">What is the correct
                                dosage of LivEver?</a>
                        </h4>
                        <div id="collapse6" class="panel-collapse collapse">
                            <p>LivEver should be taken 1 Capsule Once a day after a full meal.
                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                Is it safe for pregnant women?
                            </a>
                        </h4>
                        <div id="collapse7" class="panel-collapse collapse">
                            <p>
                                To be safe, dietary supplements should be avoided during the 1st trimester (1st 3
                                months) of pregnancy and consult your doctor.
                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                Can nursing mothers take LivEver?
                            </a>
                        </h4>
                        <div id="collapse8" class="panel-collapse collapse">
                            <p>
                                For Nursing mothers, it is best to consult your physician prior taking LivEver.
                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                Can I take LivEver even if I’m taking other medicines or supplements?
                            </a>
                        </h4>
                        <div id="collapse9" class="panel-collapse collapse">
                            <p>
                                Yes, LivEver may even help your current medications to be more effective. Precautions on
                                patients taking Anticoagulants,
                                Cyclophosphamide and Levothyroxine.

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                Where will I store my LivEver? (is it light sensitive?)

                            </a>
                        </h4>
                        <div id="collapse10" class="panel-collapse collapse">
                            <p>
                                LivEver should be stored at temperature not exceeding 25C and should be protected from
                                direct sunlight and moisture.

                            </p>
                        </div>
                    </div>
                    <div class="panel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
                                I already feel better after taking LivEver, should I still continue taking it?

                            </a>
                        </h4>
                        <div id="collapse11" class="panel-collapse collapse">
                            <p>
                                YES! With daily exposure to pollution and other harmful substances like toxins from the
                                food we eat, it is beneficial to
                                continue taking LivEver one capsule once a day after a full meal to maintain best state
                                of health EVER!!! TINDING TULOG. TINDING GISING. TINDING GALING!

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy; LivEver Copyright 2018.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Vendor-JS-->
<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/contact-form.js"></script>
<script src="/js/jquery.parallax-1.1.3.js"></script>
<script src="/js/scrollUp.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="/js/main_about.js"></script>
</body>

</html>