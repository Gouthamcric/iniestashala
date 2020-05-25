<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIESTASHALA Internships</title>

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
        <h1 style="text-align:center;margin-top:9%"><u color:black>Careers</u></h1>
        <img src="images/Picture2.png" style="margin-left: 27%;">
        <br>
        <br>
       <h4 style="text-align:center">The world is here. Where are you?</h4>
<p>We are waiting for talented people like you. We believe in giving you platform for learning, personal growth, and the opportunity to make your mark in world full of competition. We are here to provide you exiting opportunities and help you boost your career towards right path.</p>
<br>
<br>
<h1 style="text-align:center"><u color:black>Why Choose us?</u></h1>
<br>
<br>
        <div class="row" style="margin-left:3%;">
            <div class="col-md-3">
                <img src="images/Picture1.png" style="width: 79%;height: 80%;">
                Creative work environment                                           
            </div>
             <div class="col-md-3">
                 <img src="images/Picture3.png" style="height: 79%;width: 80%;"><br>
                 <p style="margin-left: 23%;">quality package</p>
            </div>
             <div class="col-md-3">
                 <img src="images/Picture4.png" style="height: 82%;"><br>
                 <p style="margin-left: 15%;">Global reach</p>
            </div>
             <div class="col-md-3">
                 <img src="images/Picture5.png"><br>
                    <p style="margin-left: 21%;">Learn & Develop</p> 
            </div>
        </div>
        <br>
             <div class="row" style="margin-left:3%;">
            <div class="col-md-3">
                <img src="images/Picture6.png">
                <p style="margin-left: 23%;">Teamwork</p>
            </div>
             <div class="col-md-3">
                 <img src="images/Picture7.png"><br>
                    <p style="margin-left: 9%;">reward & recognition</p>
            </div>
             <div class="col-md-3">
                 <img src="images/Picture8.png"><br>
                 <p style="margin-left: 9%;">Wider oppurtunities</p> 
            </div>
             <div class="col-md-3">
                 <img src="images/Picture9.png"><br>
                          <p style="margin-left: 23%;">enhance life</p>
            </div>
        </div>
       
            </div>
            <br>
            
            <div style="background-color: rgb(207, 207, 207)">
            <div class="container">
                 <h2 style="text-align:center;"><u style="color:black">Currently Available Roles!</u></h2>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <p>Webdevelopment</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                            <p>UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                         <p>Phyton Development</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                          <p>Django/Java Development</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                            <p>Webdevelopment</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                            <p>UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                           <p>Phyton Development</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                         <div class="card">
                            <div class="card-body">
                            <p>Django/Java Development</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
            <br>
            
</body>
</html>