<?php 
include('fetch_event.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="google-translate-customization" content="9f841e7780177523-3214ceb76f765f38-gc38c6fe6f9d06436-c">
    </meta>

    <title>AI & DEV : Online Space</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
</head>
<style>
    .tabs ul li {
        list-style-type: none;
    }

    .tabs ul li a {
        font-size: 25px;
        color: #4e4e4e !important;
        font-weight: 500;
    }

    .tabs ul li a.active {
        color: #f69050 !important;
    }

    .tabs ul li a:hover {
        color: #f69050 !important;
    }

    #more {
        display: none;
    }

    button {
        border: none;
        color: #f69050;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;"><img src="img/icon.png" alt="" height="50px">AI &<span
                    style="color: blue;">DEV Community</span></p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>

                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="man/login.php" class="nav-item nav-link"><i class="fa fa-user"></i></a>
                <a href="#" class="nav-item nav-link">

                <div id="google_translate_element">
                </div>


                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Event</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="courses.php">Event</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    <?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($eventName); // Display the event name
                                    ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->


<!-- Course Detail Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 wow fadeInUp">

                <div class="container">
                    <div class="row g-5 justify-content-center">

                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                            <h2><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($eventName); // Display the event name
                                    ?></h2>
                            
                            
                            
                        </div>
                    </div>
                </div>



                <div class="container-fluid wow fadeInUp mt-5 tabs">


                    <!-- Tab panes -->
                    <div class="tab-content mt-4">

                        <div class="tab-pane container active" id="Overview">
                            <h2>About this event</h2>
                            <p><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($eventDescription); // Display the event name
                                    ?></p>


                           
                            <h2 class="mt-4">
                                Skills you'll gain
                            </h2>
                            
                            <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;"><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($skill1); // Display the event name
                                    ?></span>

                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;"><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($skill2); // Display the event name
                                    ?></span>

                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2"
                                style="font-size: 15px; font-weight: normal;"><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($skill3); // Display the event name
                                    ?></span>
                           

                        </div>

                        <div class="container" id="Curriculum">

                            <h2 class="mt-4">
                                Syllabus
                            </h2>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Elements and Structure
                                    
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> Introduction to HTML</li>
                                        <li><i class="fa fa-video text-danger"></i> HTMl Document Standards</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                       Tables
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> HTML Tables</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Forms
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><ul>
                                        <li><i class="fa fa-video text-danger"></i> HTML Forms</li>
                                        <li><i class="fa fa-video text-danger"></i> Form Validation</li>
                                    </ul></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                         Semantic HTML
                                      </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body"><ul>
                                          <li><i class="fa fa-video text-danger"></i> Semantic HTML</li>
                                      </ul></div>
                                    </div>
                                  </div>
                              </div>



                        </div>

                        <div class="container" id="Instructor">
                            <h2 class="mt-4">About the Instructor</h2>
                            <div class="image-div text-left mt-4">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img src="img/profile.png" alt=""
                                            style="height: 150px; width: 150px; border-radius: 50%;">
                                    </div>
                                    <div class="col-lg-9 col-md-6 mt-2">
                                        <h5><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($instructor); // Display the event name
                                    ?></h5>
                                        <p>Developer</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><i class="fa fa-star"></i>
                                                    4.87 Instructor rating</p>
                                            </div>
                                            <div class="col-6">
                                                <p> <i class="fa fa-check
                                                    
                                                    
                                                     "></i>
                                                    1,533 reviews</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p><i class="fa fa-user"></i>
                                                    20 Students</p>
                                            </div>
                                            <div class="col-6">
                                                <p><i class="fa fa-video"></i>
                                                    29 courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="des mt-4 mb-5">
                                    <?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($about); // Display the event name
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-6 shadow wow fadeInUp" data-wow-delay="0.3s">

                <div class="image text-center">
                    <img class="img-fluid mt-2" src="img/course-1.jpg" alt="" height="200px" width="500px">
                </div>
                
                <h4 class="mt-2 p-2">Free <small></small></h4>
                
                
                

                <div class="buttons">
                    
                    <a href="signup.php"
                        class="text-decoration-none text-white btn p-3 w-100 mb-2">ENROLL NOW</a>
                    
                    
                   
                </div>
                <div class="list mt-2">
                    <div class="list1 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-clock"></i> Duration</p>
                        <p><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($duration); // Display the event name
                                    ?></p>
                    </div>
                    
                    <div class="list3 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-bolt"></i> Enrolled</p>
                        <p><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($saad); // Display the event name
                                    ?></p>
                    </div>
                    <div class="list4 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-google-translate"></i> Language</p>
                        <p><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($Language); // Display the event name
                                    ?></p>
                    </div>
                    <div class="list5 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-list"></i> Skill Level</p>
                        <p><?php
                                    // Include the PHP code that fetches the event name
                                    
                                    echo htmlspecialchars($Level); // Display the event name
                                    ?></p>
                    </div>
                    <!--
                    <div class="list7 d-flex justify-content-between pt-2 border-bottom">
                        <p><i class="fa fa-certificate"></i> Certificate</p>
                        <p>Yes</p>
                    </div>
                    <div class="button pt-4 text-center mb-4">
                        <i class="fa fa-share"></i><a href=""> Share this Course</a>
                    </div>-->
                </div>


            </div>
        </div>
    </div>

</div>
<!-- Course Detail End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <p><a class="text-light" href="about.php">About Us</a></p>
                <p><a class="text-light" href="contact.php">Contact Us</a></p>
                <p><a class="text-light" href="">Privacy Policy</a></p>
                <p><a class="text-light" href="">Terms & Condition</a></p>
                <p><a class="text-light" href="">FAQs & Help</a></p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>FSBM</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+---------</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>-----------@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Subscribe to our Newsletter</h4>
                <p>Subscribe now and join our growing community of learners committed to lifelong education! </p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="#">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email"
                            placeholder="Your email" required>
                        <button type="submit"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"><a
                                href="mailto:keertidvcorai@gmail.com">Subscribe</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index.php">AI & DEV Community</a>, All Right Reserved.

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
