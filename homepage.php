<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Service Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <?php
            session_start();
            echo "WELCOME $name";
            ?>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel bg-white">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image:url(images/robo.png);">
                        <h3 class="vr">Search Nearby Services</h3>
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <h1 class="mb-4">We Help <br></h1>To Serve You
                            <p>Various rare Services in trichy are provided in this website.</p>
                            <p><a href="login.html" class="btn btn-primary px-4 py-3 mt-3">Log-In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav -->
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image:url(images/loki.png);">
                        <h3 class="vr">HEY ! We make your Service easy</h3>
                    </div>
                    <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <h1 class="mb-4">We Provide Amazing Services ! Check it out!</h1>
                            <p>Huh ! Sometimes browser can't fullfill our needs !</p>
                            <p><a href="login.html" class="btn btn-primary px-4 py-3 mt-3">View our Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/spidy.jpg);">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading subheading-with-line"><small
                                    class="pr-2 bg-white">About</small></span>
                            <h2 class="mb-4">Want To know about <span
                                    style="color: red; border-color: black;">WEHELP</span></h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p><span style="color: crimson;">WEHELP</span>&nbsp;&nbsp;Provides Tons of services for user to
                            Easier their works.</p>
                        <p>where we believe in saving your valuable time. We understand the hustle and bustle of daily
                            life, and that's why we've curated a platform dedicated to providing you with rare and
                            invaluable information about our services. Our mission is to streamline your user experience
                            by offering insights and resources that are not only difficult to find elsewhere but are
                            also tailored to make your journey more efficient. At <span
                                style="color: crimson;">WEHELP</span>, we're committed to being your time-saving
                            companion, delivering exceptional service-related content that empowers you to make informed
                            decisions swiftly. Join us on this journey of optimization and discovery, and let's make
                            every moment count.

                        </p>
                        <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url(images/intersteller.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-end">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                    <span>Number Of Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="25">0</strong>
                                    <span>Top Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-5">
                <div class="col-md-4 heading-section ftco-animate">
                    <h2 class="mb-4">Our Work Flow</h2>
                </div>
                <div class="col-md-8 pl-md-5 ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-idea"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Perfectly Design</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-compass-symbol"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Carefully Planned</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-layers"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Smartly Execute</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start mt-5 py-5" id="serviceshortcut">
                <div class="col-md-4 heading-section ftco-animate">
                    <h2 class="mb-4">Our Services</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic.</p>
                </div>
                <div class="col-md-8 ftco-animate">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-layers"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Design</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-layers"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Industrial Design</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-layers"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Architecture Support</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-layers"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Renovation</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Projects</small></span>
                    <h2 class="mb-4">Featured Projects</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in. A small river named Duden flows by their
                            place and supplies it with the necessary regelialia. It is a paradisematic country, in which
                            roasted parts of sentences fly into your mouth.</p>
                        <p class="category mt-5">
                            <span class="active mr-2"><a href="#">All Work</a></span>
                            <span class="mr-2"><a href="#">Interior</a></span>
                            <span class="mr-2"><a href="#">Exterior</a></span>
                            <span class="mr-2"><a href="#">Landscape</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/abacus (2).png" class="img-fluid" alt="shade's touch">

                        <div class="text">
                            <h2 style="color: white;">Abacus Trainer</h2>
                            <h5><button><a href="project.html">Click here to view Details</a></button></h5>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/aari5.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <h2 style="color: white;">Aari Work Designers</h2>
                            <h5><button><a href="project.html">Click here to view Details</a></button></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/cctv.png" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <h2 style="color: white;">CCTV Service</h2>
                            <h5><button><a href="project.html">Click here to view Details</a></button></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/dish3.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <h2 style="color: white;">Dish Tv Services</h2>
                            <h5><button><a href="project.html">Click here to view Details</a></button></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/electri1.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <h2 style="color: white;">Electrician Service</h2>
                            <h5><button><a href="project.html">Click here to view Details</a></button></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-6.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <span>Exterior Design</span>
                            <h3>Office Interior Design</h3>
                        </div>
                        <a href="images/work-6.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-7.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <span>Exterior Design</span>
                            <h3>Office Interior Design</h3>
                        </div>
                        <a href="images/work-7.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-8.jpg" class="img-fluid" alt="shade's touch">
                        <div class="text">
                            <span>Interior Design</span>
                            <h3>Office Interior Design</h3>
                        </div>
                        <a href="images/work-8.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-light">Testimony</small></span>
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">CEO Founder of Commercial Building</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">CEO Founder of Interior Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">Exterior Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">Landscape Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">System Analyst</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Expert
                            Team</small></span>
                    <h2 class="mb-4">Our Architect Team</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/team-1.jpg);"></div>
                        <div class="text px-4 pt-4">
                            <h3>John Wilson</h3>
                            <span class="position mb-2">Co-Founder / CEO</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/team-2.jpg);"></div>
                        <div class="text px-4 pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Achitect</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/team-3.jpg);"></div>
                        <div class="text px-4 pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Achitect</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(images/team-4.jpg);"></div>
                        <div class="text px-4 pt-4">
                            <h3>David Smith</h3>
                            <span class="position mb-2">Achitect</span>
                            <div class="faded">
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Blog</small></span>
                    <h2 class="mb-4">Recent Blog</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 20, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 20, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Jan. 20, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-client">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Clients</small></span>
                    <h2 class="mb-4">Our CLients</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-client owl-carousel">
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 1
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 2
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 3
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 4
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 5
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 6
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="client text-center p-5">
                                CLient Logo 7
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Mosaic</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Architectural Design</a>
                            </li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Interior Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Exterior Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lighting Design</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>AutoCAD Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>