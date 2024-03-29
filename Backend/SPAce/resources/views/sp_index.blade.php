<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPAce - Beauty & Spa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    
    @include("layouts/sp_head")

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });


    </script>
</head>

<body>
   
<header>
    <nav class="nav">
        <div class="container">
            <div class="logo" style="display: table-cell; vertical-align: middle;">
                <a class="navbar-brand" href="#"><img src="img/logo.png"
                  style="height: auto; width: 50px; padding-bottom: 5px; padding-top: 4px;" /></a>
                  <a href="#home"><img src="img/sitename no tagline.png"
                    style="height: auto; width: 125px; padding-bottom: 25px; padding-left: 10px; padding-top: 5px;" /></a>
            </div>
            
                
            
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="/sp_index">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/sp_onboarding">How it works</a></li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                      </li> -->
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
</header>

    <!-- Carousel Start -->
    <section id="home">
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div style="position: relative; text-align: center;">
                                <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" id="sitelogo" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 120px;">Massage Treatment</h3>
                              </div>
                              
                              
                            <p class="mx-md-5 px-5">Our licensed massage therapists offer custom therapeutic techniques to relieve stress and enhance overall well-being at the comfort of your home.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/client1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div style="position: relative; text-align: center;">
                                <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 120px;">Register</h3>
                              </div>
                            <p class="mx-md-5 px-5">Register with us and enjoy the perks only members can fully enjoy. Your relaxation and pampering awaits. </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/onboarding.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div style="position: relative; text-align: center;">
                                <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"><img class="position-absolute" src="img/sitename.png" style="object-fit: cover; height: 150px; width: auto; top: 0; left: 50%; transform: translateX(-50%); "><br></h6>
                                <h3 class="display-3 text-capitalize text-white mb-3" style="margin-top: 140px;">Join the team!</h3>
                              </div>
                           
                            <p class="mx-md-5 px-5">Start an exciting career as a freelance specialist with us, a data-driven and service-focused companyn.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Sign with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Carousel End -->


    <!-- About Start -->
    <section id="about">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">The ultimate spa experience,</br> 
                        wherever you are</h1>
                    <p class="pl-4 border-left border-primary">With SPAce, pampering can be on demand. Now, the ultimate spa experience can be experienced wherever you are we bring relaxation to you.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- About End -->


    <!-- Service Start -->
    <section id="services">
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>WHAT WE DO</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Body Massage</h4>
                    <p class="text-white px-3 mb-3">"Relax and recharge your body and mind with our indulgent massage spa treatments."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-2.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stone Therapy</h4>
                    <p class="text-white px-3 mb-3">"Discover the healing power of hot stone therapy for deep relaxation and muscle relief."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facial Therapy</h4>
                    <p class="text-white px-3 mb-3">"Transform your skin and enhance your natural beauty with our customized facial therapy."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <p class="text-white px-3 mb-3">"Experience radiant, healthy-looking skin with our premium skincare products and treatments."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-5.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Stream Bath</h4>
                    <p class="text-white px-3 mb-3">"Detoxify and rejuvenate your body with our invigorating steam bath experience."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Face Masking</h4>
                    <p class="text-white px-3 mb-3">"Experience the ultimate relaxation and skin rejuvenation with our luxurious face masking spa treatments."</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Book now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Service End -->


    <!-- Open Hours Start -->
    <section id="open">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Operating Hours</h6>
                        <h1 class="mb-4">The spa experience, reimagined</h1>
                        <p>SPAce can be your place of solace, a tranquil oasis where you can escape the stresses of everyday life and indulge in much-needed self-care.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Weekdays: 9:00 AM-7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Weekends: 9:00 AM-6:00 PM</li>
                            
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Open Hours End -->


    <!-- Pricing Start -->
    <section id="pricing">
    <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/pricing.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5 mb-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="price bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">₱</small>390<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Book Now</a>
                                </div>
                            </div>
                            <div class="price bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">₱</small>990<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Book Now</a>
                                </div>
                            </div>
                            <div class="price bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">₱</small>1490<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Pricing End -->


    <!-- Team Start -->
    <section id="team">
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialists</h6>
                    <h1 class="mb-5">Spa & Beauty Specialists</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/fakehuman001.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/fakehuman015.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/fakehuman018.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/fakehuman010.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <section id="testimonial">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/fakehuman012.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Daiben Sanchez</h6>
                                    <span>Teacher</span>
                                </div>
                            </div>
                            <p class="m-0">"I was so impressed with the convenience and quality of the spa services I received through this website! I was able to book a massage and facial right from my phone, and the therapist arrived at my doorstep within the hour. She was professional and skilled, and I was able to relax in the comfort of my own home. I highly recommend this website to anyone looking for a spa experience that comes to you!"</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/fakehuman008.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Angelo Sanchez</h6>
                                    <span>IT Specialist</span>
                                </div>
                            </div>
                            <p class="m-0">"I travel frequently for work and have a hard time finding a good spa in new cities. This website has been a game-changer for me! I can quickly and easily book a massage or other spa service through the app, and it saves me so much time and stress. Plus, the quality of the services has been consistently excellent. I highly recommend this website to anyone who travels frequently or just wants to have a spa experience without leaving home."</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/fakehuman004.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Daiben Angelo Sanchez</h6>
                                    <span>Tiny Tina Enjoyer</span>
                                </div>
                            </div>"I was hesitant to try an on-demand spa service, but I am so glad I did! The therapist who came to my home was so professional and skilled, and I was able to relax in my own environment. Plus, the prices were very reasonable compared to traditional spa services. I highly recommend this website to anyone looking for a convenient and high-quality spa experience."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Testimonial End -->

 <!-- Contact Start -->
    <section id="contact">
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386194.33179759294!2d120.96117362258236!3d14.599512273818314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb7af77d3c1f%3A0x49c7ff668df0b028!2sMetro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sus!4v1646956669775!5m2!1sen!2sus
                    " frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="contact-form bg-light p-4 p-lg-5 my-lg-5">
                    <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                    <h1 class="mb-4">Contact For Any Query</h1>
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative py-5" style="margin-top: 90px; background-color: #2d4b5a;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPAce</span></h1>
                    </a>
                    <p><strong><i>"Your relaxation and pampering awaits."</i></strong></p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>WD Unit 38, QQB, Metro Manila, Philippines</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>(02) 620 6789</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@space.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white-50 mb-2" href="index.html#about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                                <a class="text-white-50 mb-2" href="index.html#pricing"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                                <a class="text-white-50" href="index.html#contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                <a class="text-white-50" href="./onboarding.html"><i class="fa fa-angle-right mr-2 mt-2"></i>How it works</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Body Massage</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Stone Therapy</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Facial Therapy</a>
                                <a class="text-white-50 mb-2" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Skin Care</a>
                                <a class="text-white-50" href="index.html#services"><i class="fa fa-angle-right mr-2"></i>Stream Bath</a>
                                <a class="text-white-50" href="index.html#services"><i class="fa fa-angle-right mr-2  mt-2"></i>Face Masking</a>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Newsletter</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">SPAce</a>. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    
</body>

</html>