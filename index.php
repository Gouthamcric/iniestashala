<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>internshiparoma</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

</head>

<body>


<?php include("header_2.php"); ?>
    <div class="container-fluid top-container">
        <span style="padding:2% 3% 4%; border-radius: 50px; background-image: -webkit-linear-gradient(65deg,rgb(41, 156, 147),rgb(247, 199, 199));"><img src="images/INTERNSHIPAROMA-logo.png" style="width: 100px; height: 44px;" alt=""></span>
        <!-- <h1 class="p-2 mx-5" style="border-radius: 50px; background-image: -webkit-linear-gradient(65deg,rgb(41, 156, 147),rgb(247, 199, 199));"><img src="images/INTERNSHIPAROMA-logo.png" style="width: 100px; height: 44px;" alt=""></h1> -->
        <div id="carouselExampleControls" class="carousel slide mt-2" data-ride="carousel" data-interval="4000">
            <!-- to handle slide time use attr data-interval see doc on bootstrap carousel options -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- 1 -->
                    <div class="text-light" style="background-image: -webkit-linear-gradient(155deg,rgb(73, 173, 165),rgb(230, 229, 224)); padding: 10%; border-radius: 220px 0 220px 0;">
                        <a href="" class="text-decoration-none text-light"><span style="padding:2%; border-radius: 50px; background-image: -webkit-linear-gradient(65deg,rgb(41, 156, 147),rgb(247, 199, 199));"> Register as a Student </span></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <!-- 2 -->
                    <div class="text-light" style="background-image: -webkit-linear-gradient(155deg,rgb(73, 173, 165),rgb(230, 229, 224)); padding: 10%; border-radius: 220px 0 220px 0;">
                      <a href="" class="text-decoration-none text-light"><span style="padding:2%; border-radius: 50px; background-image: -webkit-linear-gradient(65deg,rgb(41, 156, 147),rgb(247, 199, 199));"> Register as an Employer </span></a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon black-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon black-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- body -->
    <div class="body-1">
        <h4 style="padding: 1% 0;">Internship in popular cities</h4>
        <div class="row">
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Delhi-NCR</a></h5> -->
                        <a href="internships.php?city=delhi"><img style="width: 100%; height: 100%;" src="images/icon_delhi2.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Banglore</a></h5> -->
                        <a href="internships.php?city=bangalore"><img style="width: 100%; height: 100%;"
                                src="images/icon_banglore2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="">Mumbai</a></h5> -->
                        <a href="internships.php?city=mumbai"><img style="width: 100%; height: 100%;" src="images/mumbai.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Kolkata</a></h5> -->
                        <a href="internships.php?city=kolkata"><img style="width: 100%; height: 100%;"
                                src="images/icon_kolkata2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Gurugram</a></h5> -->
                        <a href="internships.php?city=gurgaon"><img style="width: 100%; height: 100%;"
                                src="images/icon_gurgurm2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Hydrabad</a></h5> -->
                        <a href="internships.php?city=hyderabad"><img style="width: 100%; height: 100%;"
                                src="images/icon_hydrabad1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Internship in popular cities -->

    <div class="body-2">
        <h4 style="padding: 1% 0;">Internship in popular categories</h4>
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Part-time</a></h5> -->
                        <a href="internships.php?part_time=1"><img style="width: 100%; height: 100%;" src="images/icon_media.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Engineering</a></h5> -->
                        <a href="internships.php?job=engineering"><img style="width: 100%; height: 100%;" src="images/icon_engg.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">NGO</a></h5> -->
                        <a href="internships.php?job=Social Work, Volunteering, Hospitality"><img style="width: 100%; height: 100%;" src="images/icon_ngo.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Design</a></h5> -->
                        <a href="internships.php?job=Content Writing, Creative Writing,Video Making/Editing,Videography,Graphic Development"><img style="width: 100%; height: 100%;" src="images/icon_design.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Science</a></h5> -->
                        <a href="internships.php?job=science"><img style="width: 100%; height: 100%;"
                                src="images/icon_science1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="card grey-card">
                    <div class="card-body" style="padding: 0;">
                        <!-- <h5 class="card-title"><a href="internships.php">Media</a></h5> -->
                        <a href="internships.php?job=acting,Digital Marketing,Journalism"><img style="width: 100%; height: 100%;"
                                src="images/icon_media1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <h5 style="margin-top: 2%;">or <a href="internships.php">View all internships ></a></h5>
    </div>

    <hr>


    <!-- Iniestashala Trainings -->

    <div class="body-2">
        <h4 style="padding: 2% 0;">Iniestashala Trainings</h4>
        <div class="row">
            <div class="col-lg-3">
                <a href="route/web.php">
                    <div class="card">
                        <h5 class="card-header">Web Development</h5>
                        <div class="card-body">
                            <p class="card-text">Build an e-commerce website from scratch.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="route/python.php">
                    <div class="card">
                        <h5 class="card-header">Python</h5>
                        <div class="card-body">
                            <p class="card-text">Build a fansy cricket game using python language.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="route/digitalMarketing.php">
                    <div class="card">
                        <h5 class="card-header">Digital Marketing</h5>
                        <div class="card-body">
                            <p class="card-text">Learn SEO, email marketing, web analytics and more. </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="route/ethical.php">
                    <div class="card">
                        <h5 class="card-header">Ethical Hacking</h5>
                        <div class="card-body">
                            <p class="card-text">Learn to hack and secure web applications.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="training.php" style="margin-top: 2%;" class="btn btn-info btn-lg">VIEW ALL TRAINING PROGRAMS</a>
    </div>

    <hr>

    <!-- Top Articles of the month -->

    <div class="body-3">
        <h3 style="color: #292b2c; padding: 3%;">Top Articles of the month</h3>
        <div class="row">
            <div class="col-lg-6">
                <a href="">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/Screenshot (73).png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">What is an internship?</h5>
                                    <p class="card-text">What is an internship and how to get one - the complete
                                        handbook!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/Screenshot (74).png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">How to make resume?</h5>
                                    <p class="card-text">How to make resume for internships - the complete beginner's
                                        guide!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/Screenshot (75).png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Interview Questions!</h5>
                                    <p class="card-text">Know common iterview questions and how to answer them</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/Screenshot (76).png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Part-time jobs!</h5>
                                    <p class="card-text">Part-time job for Students - How to work while in college</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <a href="">
            <h5 style="margin-top: 3%;">View more articles ></h5>
        </a>

    </div>


    <!-- footer -->
    <div class="footer">
        <div class="row">
            <div class="col-lg-3 white-text">
                <h6><u><b>Internships by places</b></u></h6>
                <a href="internships.php">
                    <p>Internship in India</p>
                </a>
                <a href="internships.php?city=delhi">
                    <p>Internship in Delhi</p>
                </a>
                <a href="internships.php?city=mumbai">
                    <p>Internship in Mumbai</p>
                </a>
                <a href='internships.php?city=banglore'>
                    <p>Internship in Banglore</p>
                </a>
            </div>
            <div class="col-lg-3 white-text">
                <h6><u><b>Internships by stream</b></u></h6>
                <a href="internships.php">
                    <p>Computer science Internship</p>
                </a>
                <a href="internships.php">
                    <p>Electronics Internship</p>
                </a>
                <a href="internships.php">
                    <p>Civil Internship</p>
                </a>
                <a href="internships.php">
                    <p>Mechanical Internship</p>
                </a>
            </div>
            <div class="col-lg-3 white-text">
                <h6><u><b>Online Summer Trainings</b></u></h6>
                <a href="route/web.php">
                    <p>Web Development</p>
                </a>
                <a href="route/android.php">
                    <p>Android App Development</p>
                </a>
                <a href="route/python.php">
                    <p>Programming with Python</p>
                </a>
                <a href="route/data.php">
                    <p>Data Science</p>
                </a>
            </div>
            <div class="col-lg-3 white-text">
                <h6><u><b>About Iniestashala</b></u></h6>
                <a href="internships.php">
                    <p>About us</p>
                </a>
                <a href="internships.php">
                    <p>We're hiring</p>
                </a>
                <a href="internships.php">
                    <p>Hire interns for your company</p>
                </a>
                <a href="">
                    <p>Blog</p>
                </a>
                <button class="btn btn-dark"><i class="fab fa-google-play"></i>Download</button>
            </div>
        </div>
        <hr>
        <p>&copy; Internshiparoma 2020</p>
    </div>











    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>