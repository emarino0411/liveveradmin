<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>LivEver - Tinding Galing Home Page</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="css/themify-icons.css">-->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="/css/normalize.css">

    <link rel="stylesheet" href="/css/livever.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="/css/animations.css">
    <link rel="stylesheet" href="/css/style.css">


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body data-spy="scroll" data-target="#primary-menu">

<!--Mainmenu-area-->
<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo">
                <img src="assets/images/logo.png" class="img img-responsive">
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home-page">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#ingredients">Components</a></li>
                <li><a href="#contactus">Contact Us</a></li>
                <li><a href="/about">About Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--Mainmenu-area/-->


<!--Header-area-->
<header class="header-area  overlay-benefits  section-padding" id="home-page">

    <div class="container">
        <div class="row v-center">
            <?php
            $path = './assets/carousel';
            $files = scandir($path);
            $files = array_diff(scandir($path), array('.', '..'));

            ?>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="max-height:600px; overflow: hidden">
                <div class="testimonials">
                    <?php
                    foreach ($files as $picture) {
                    ?>
                    <div class="testimonial">
                        <div class="testimonial-photo">
                            <img src="assets/carousel/<?php echo $picture; ?>"
                                 alt="" class="img-responsive center-block">
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>


        </div>
</header>

<!--Spacer-->
<section class="spacer-padding">

</section>
<!--Spacer/-->


<section class="benefits-bg overlay section-padding" id="benefits">

    <div class="main-cover">
        <div id="dp">
            <img class="img-responsive center-block" src="assets/images/9_health_benefits_page2.png">
        </div>
        <div id="benefits_icons">
            <div class="row text-center">
                <div class="row" style="margin-bottom:1%;">
                    <!--First column first 3-->
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/healthyliver.png"
                                         class="img-responsive img-circle center-block" alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-sm-8 box-description">

                                <p class="benefits_label blue">HEALTHY LIVER</p>
                                <p class="components_description blue ">
                                    Boosts detoxification process in the liver by helping flush out harmful toxins and
                                    free
                                    radicals.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/goodsleep.png"
                                         class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label blue">GOOD SLEEP</p>
                                <p class="components_description blue ">
                                    Helps produce and metabolize sleep boosters for more restful recovery.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/digestion.png"
                                         class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label blue">GOOD DIGESTION</p>
                                <p class="components_description blue ">
                                    Improves intestinal permeability for better digestion and treats inflammatory bowel
                                    disease.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:1%;">
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/highenergy.png"
                                         class="img-responsive img-circle center-block img-" alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label blue">HIGH ENERGY</p>
                                <p class="components_description blue ">
                                    Aids in breaking down proteins, fats and sugars in the body for proper utilization
                                    as
                                    energy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/mentalalertness.png"
                                         class="img-responsive img-circle center-block" alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label blue">MENTAL ALERTNESS</p>
                                <p class="components_description blue ">
                                    Increases production of neurotransmitters that improve brainpower, memory and
                                    cognition.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                        <div class="box box-blue">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                                <div class="box-icon content">
                                    <img src="assets/benefits/bloodcirculation.png"
                                         class="img-responsive img-circle center-block" alt="">
                                </div>
                                <div class="arrow-right-blue"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label blue">GOOD BLOOD CIRCULATION</p>
                                <p class="components_description blue ">
                                    Enhances oxygen flow throughout the body and helps prevent blood platelet clots,
                                    strokes
                                    and heart diseases.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<!--Spacer-->
<section class="spacer-padding">
</section>
<!--Spacer/-->

<section class="benefits-bg overlay-ingredients section-padding" id="ingredients">

    <div class="main-cover">
        <div id="dp_ingredients">
            <img class="img-responsive center-block" src="assets/images/9_ingredients_page3.png">
        </div>
        <div id="ingredients_icons">

            <div class="row text-center" style="margin-bottom:1%;">
                <!--First column first 3-->
                <!--thistle-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#THISTLE" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/milk_thistle.png"
                                         class="img-responsive img-circle center-block" alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">MILK THISTLE EXTRACT</p>
                                <p class="benefits_description olive">
                                    Protects the liver, kidneys and heart with its amazing antioxidant and
                                    anti-inflammatory properties. Also contains Flavonolignans that help against nerve
                                    damage and brain aging.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--posphatidycholine-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">

                    <div class="box box-olive">
                        <a href="#" data-target="#PHOSPHATIDYLCHOLINE" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/brocolli.png"
                                         class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">PHOSPHATIDYLCHOLINE</p>
                                <p class="benefits_description olive">
                                    Made up of phosphate, fatty acids and Choline that significantly slow down brain
                                    aging by increasing neuroplasticity and cognitive functions.
                                </p>
                            </div>

                        </a>
                    </div>
                </div>
                <!--turmeric-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#TURMERIC" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/turmeric.png"
                                         class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">TURMERIC EXTRACT (CURCUMA LONGA)</p>
                                <p class="benefits_description olive">
                                    Has a potent antioxidative and anti-inflammatory effect for all parts of the body.
                                </p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row text-center" style="margin-bottom:1%;">
                <!-- lipoic -->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">

                    <div class="box box-olive">
                        <a href="#" data-target="#LIPOIC" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/beans.png"
                                         class="img-responsive img-circle center-block img-" alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">ALPHA LIPOIC ACID</p>
                                <p class="benefits_description olive">
                                    Considered as the “super antioxidant” that recycles Vitamin C and E, Glutathione and
                                    CoQ10 that the body uses to combat diseases for aging people such as stroke, heart
                                    disease, cataract and memory loss.
                                </p>
                            </div>
                        </a>
                    </div>

                </div>
                <!--calcium-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">

                    <div class="box box-olive">
                        <a href="#" data-target="#CALCIUM" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive  content">
                                    <img src="assets/components/groundmeat.png"
                                         class="img-responsive img-circle center-block" alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">CALCIUM PANTOTHENATE (Vitamin B5)</p>
                                <p class="benefits_description olive">
                                    Regulates energy metabolism and mental stamina. Helps prevent fatigue and mood
                                    disorders such as depression and irritability.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--zinc-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#ZINC" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/zinc.png" class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>

                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">ZINC</p>
                                <p class="benefits_description olive">
                                    A catalyst for many enzymatic reactions in the body such as normal growth, tissue
                                    repair and wound healing.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="margin-bottom:1%;">
                <!--thiamin-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#THIAMIN" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/tomato.png"
                                         class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">THIAMIN (VITAMIN B1)</p>
                                <p class="benefits_description olive">
                                    Helps produce adenosine triphosphate (ATP) that fuels the body to perform essential
                                    functions such as sleep cycle regulation, brain circulation and cellular metabolism.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--pyridoxine-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#PYRIDOXINE" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/b6.png"
                                         class="img-responsive img-circle center-block img-"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">PYRIDOXINE (VITAMIN B6)</p>
                                <p class="benefits_description olive">
                                    Utilized in energy metabolism in your cells as well as in the production of
                                    neurotransmitters that increases cognitive ability and focus. It helps prevent brain
                                    tissue shrinkage and Alzheimer’s disease.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!--cyanocobalamin-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <a href="#" data-target="#CYANOCOBALAMIN" data-toggle="modal">
                            <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                                <div class="box-icon-olive content">
                                    <img src="assets/components/egg.png" class="img-responsive img-circle center-block"
                                         alt="">
                                </div>
                                <div class="arrow-right-olive"></div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                                <p class="benefits_label_long olive">CYANOCOBALAMIN (VITAMIN B12)</p>
                                <p class="benefits_description olive">
                                    A water-soluble vitamin that plays a key role in normalizing the functions of the
                                    brain, nervous system and formulation of blood.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    </div>

</section>

<!--Spacer-->
<section class="spacer-padding">
</section>
<!--Spacer/-->

<footer class="footer-area relative" id="contactus">
    <div class="absolute"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Contact Us</h2>
                    <p> We strive to deliver the highest quality and value possible to make our customers happy and
                        satisfied. <br> How can we help you?</p>
                </div>
            </div>
        </div>
        <div class="row overlay-footer">
            <div class="col-xs-12 col-md-7">
                <address class="side-icon-boxes">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p>Unit 202 MGT Guerra Building,<br> 1170 Don Chino Roces Avenue,<br>
                                    Brgy. San Antonio, Makati City, <br>Philippines</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a style="color:#6C6C6C" href="callto:02-838-4534">(02) 838-4534</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a style="color:#6C6C6C"
                                       href="mailto:livever@mergfilpharma.com">livever@mergfilpharma.com</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </address>
            </div>
            <div class="col-xs-12 col-md-5">
                <form action="/inquiries/save" method="post" class="contact-form">
                    {{csrf_field()}}
                    <div class="form-double">
                        <input type="text" id="form-name" name="name" placeholder="Your name"
                               class="form-control{{ $errors->has('name') ? ' has-error' : '' }}"
                               required="required">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                        @endif
                        <input type="email" id="form-email" name="email"
                               class="form-control{{ $errors->has('topic') ? ' has-error' : '' }}"
                               placeholder="E-mail address" required="required">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                    </div>
                    <input type="text" id="form-subject" name="topic"
                           class="form-control{{ $errors->has('name') ? ' has-error' : '' }}"
                           placeholder="Message topic" required>
                    @if ($errors->has('topic'))
                        <span class="help-block">
                            <strong>{{ $errors->first('topic') }}</strong>
                        </span>
                    @endif
                    <textarea name="message" id="form-message" name="message" rows="5"
                              class="form-control{{ $errors->has('name') ? ' has-error' : '' }}"
                              placeholder="Your message" required="required"></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                    <div class="col-md-6">
                        <button type="submit" class="button">Submit</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <ul class="social-menu text-right x-left">
                            <li><a href="https://www.facebook.com/LivEverTotalBodySupplement/"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy; LivEver Copyright 2018. Powered by: Redbin</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Lightbox -->
<!-- Modal -->
<div class="modal fade" id="success" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Message sent!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="THISTLE" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/milk_thistle.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">MILK THISTLE EXTRACT (SILYBUM MARIANUM)</h4>
                        <p class="modal-dosage">DOSAGE : 300 mg</p>
                        <p class="modal-dosage-benefits">
                        <ul class="list-modal">
                            <li>
                                Effective in stimulating function of liver that helps filter toxins out of the blood
                            </li>
                        </ul>
                        </p>
                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Control diabetes and lowers risk of heart attack</li>
                            <li>Give high energy</li>
                            <li>Promote good sleep</li>
                            <li>Promote good digestion</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="PHOSPHATIDYLCHOLINE" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/brocolli.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">PHOSPHATIDYLCHOLINE</h4>
                        <p class="modal-dosage">DOSAGE : 50 mg</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Support brain health, memory and cognition</li>
                            <li>Improve blood flow and circulation</li>
                            <li>Boost detoxification process</li>
                            <li>Boost energy and endurance</li>
                            <li>Support healthy digestion</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TURMERIC" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/turmeric.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">TURMERIC EXTRACT (CURCUMA LONGA)</h4>
                        <p class="modal-dosage">DOSAGE : 50 mg</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Enhance brain function</li>
                            <li>Support cardiovascular function</li>
                            <li>Boost detoxification</li>
                            <li>Promote blood circulation</li>
                            <li>Treat inflammatory bowel diseases</li>
                            <li>Support joint and muscle health</li>
                            <li>Promote youthful skin</li>
                            <li>Enhance mood</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="LIPOIC" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/beans.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">ALPHA LIPOIC ACID</h4>
                        <p class="modal-dosage">DOSAGE : 50 mg</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Improve brain function</li>
                            <li>Promote heart health</li>
                            <li>Boost detoxification</li>
                            <li>Promote blood circulation</li>
                            <li>Promote energy</li>
                            <li>Keep skin healthy and more radiant</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CALCIUM" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/groundmeat.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">CALCIUM PANTOTHENATE</h4>
                        <p class="modal-dosage">DOSAGE : 4.4 mg</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Regulate energy metabolism</li>
                            <li>Improve mental stamina</li>
                            <li>Reduce stress</li>
                            <li>Improve cardiovascular health</li>
                            <li>Maintain nerve function</li>
                            <li>In detoxification process</li>
                            <li>Prevent fatigue</li>
                            <li>Aide in immune function</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="THIAMIN" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/tomato.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">THIAMIN (VITAMIN B1)</h4>
                        <p class="modal-dosage">DOSAGE : 1.1 mg RENI 92%</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Improve memory</li>
                            <li>Maintain a healthy heart</li>
                            <li>Promote energy</li>
                            <li>Protect your body from signs of aging such as wrinkles and lines</li>
                            <li>Improve quality of sleep</li>
                            <li>Promote good digestion</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="PYRIDOXINE" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/b6.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">PYRIDOXINE (VITAMIN B6)</h4>
                        <p class="modal-dosage">DOSAGE : 1.3 mg RENI 100%</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Enhance mood and increase alertness</li>
                            <li>Promote in energy production</li>
                            <li>Increase stamina</li>
                            <li>Maintain healthy blood vessels</li>
                            <li>Produce red blood cells</li>
                            <li>Promote good digestion</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ZINC" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/zinc.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">ZINC (eq. to 17.53 mg Zinc Sulfate)</h4>
                        <p class="modal-dosage">DOSAGE : 6.4 mg RENI 98%</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Maintain strong brain function</li>
                            <li>Promote cardiovascular health</li>
                            <li>Boost energy levels</li>
                            <li>Improve digestion</li>
                            <li>In nutrient absorption</li>
                            <li>Improve immune system</li>
                            <li>Promote good sleep</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CYANOCOBALAMIN" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="assets/components/modal/egg.png"
                             class="img-responsive img-circle center-block"
                             style="background-color:rgb(199,210,130)" alt="">
                    </div>
                    <div class="col-md-12">
                        <h4 class="modal-label text-center">CYANOCOBALAMIN (VITAMIN B12)</h4>
                        <p class="modal-dosage">DOSAGE : 2.4 mCg RENI 100%</p>

                        <p class="modal-benefits">HELPS:</p>
                        <p class="modal-benefits-list">
                        <ul class="list-modal">
                            <li>Enhance mood and memory</li>
                            <li>In the formulation of blood</li>
                            <li>Protect the heart</li>
                            <li>Promote good digestion</li>
                            <li>Promote high energy</li>
                            <li>Promote good sleep</li>
                        </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Vendor-JS-->
<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<!--Plugin-JS-->
<script src="/js/owl.carousel.min.js"></script>
<!--<script src="js/contact-form.js"></script>-->
<!-- <script src="js/jquery.parallax-1.1.3.js"></script> -->
<!-- <script src="js/scrollUp.min.js"></script> -->
<!-- <script src="js/magnific-popup.min.js"></script> -->
<script src="js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="js/main.js"></script>

<script>
    $(window).scroll(function () {
        $('#dp').each(function () {
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).addClass("hatch");
            }
        });

        $('#dp_ingredients').each(function () {
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 800) {
                $(this).addClass("hatch");
            }
        });

    });
</script>
    @if(session('status')=='success')
        <script>$('#success').modal('show');</script>
    @endif

</body>

</html>
