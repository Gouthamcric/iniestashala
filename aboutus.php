<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internshiparoma</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script src="dist/js/BsMultiSelect.js"></script>


    <link rel="stylesheet" href="internships.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbar -->
<?php if(!isset($_SESSION['id'])){include('header_2.php');} else {include("header.php");} ?>
 
    <!-- navbar end -->

    <!-- body -->

    <div class="container">
        <h1 style="text-align:center;margin-top:9%"><u color:black>About Us</u></h1>
        We are a well-handled and a purposeful organization that works intending to provide an appropriate platform for the learners to designate themselves with numerous skills and training. And a forum stage for the employers to hire freelancers with devoted skills to work with them in required fields.
        <br>
            <div class="row" style="margin-top: 10%;">
                <div class="col-md-6">
                      <h5><u style="color:red">For Students:</u></h5><img src="images/stu.jpg" style="width:95%;height:65%"> We provide them with practical exposure with online courses and apprenticeships of their relevance (anytime and anywhere) under the mentorship of experienced and finest professionals. Providing them the arena where they can pursue their passion as their career choice, with proper guidance and online pieces of training with minimal charges.
                </div>
                 <div class="col-md-6">
                     <h5><u style="color:red">For Employers:</u></h5><img src="images/emp.jpg"> Contributing them with the top-notch freelancers for their formulations having expertise in their respective fields ranging from science and technology, covering the parts of development, management, literature, & ending up to data entry and other services.
	
                </div>
            </div>
</div>
<div class="container">
     <h1 style="text-align:center;margin-top:9%"><u color:black>Our Vision</u></h1>
     <br>
    <div class="row">
        <div class="col-md-6">
             <img src="images/vision.png" style="height: 35%;width: 100%;">  
        </div>
           <div class="col-md-6">
            Our vision is to provide opportunity to all the capable people. We bring innovation and inspiration to the world. 
To make easy for people to work from home and delivering the best concept from their minds.
To make our employees eligible with critical thinking and make their own ideas turned into reality is our goal. 
        </div>
    </div>
     <div class="container" style="margin-top:-21%">
     <h1 style="text-align:center;margin-top:9%"><u color:black>Our Mission</u></h1>
   <br>
    <div class="row">
        <div class="col-md-6">
                Our vision is to provide opportunity to all the capable people. We bring innovation and inspiration to the world. 
To make easy for people to work from home and delivering the best concept from their minds.
To make our employees eligible with critical thinking and make their own ideas turned into reality is our goal.
        </div>
           <div class="col-md-6">
         <img src="images/mission.png" style="height: 35%;width: 100%;">  
        </div>
    </div>
    </div>
  <div class="container">
      <div class="row" style="margin-top: -14%;">
          <div class="col-md-12">
  <h1 style="text-align:center"><u style="color:black">Partner With Us</u></h1>
     <p style="margin-bottom: -21%;">At freelancing, we give you a chance to elaborate your vision, your thinking capacity, your creative mindset to make yourself better for tomorrow.
We convert your ideas into opportunity.
All kinds of training are provided here at freelancing.
Here, we transform our employees into their best version for better tomorrow.</p>
</div>
</div>
</div>
</body>
</html>