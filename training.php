<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Internshiparoma</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  	<link rel="stylesheet" type="text/css" href="training.css">
  	 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,700&display=swap" rel="stylesheet">
</head>
<body>
     <?php if(isset($_SESSION['id'])){include "header.php";} else {include "header_2.php";} ?>
	<div class="jumbotron text-center bg-secondary">
		 <h3 class="text-white">Online Trainings provided By Iniestashala</h3>
	</div>
	<div class="container">
		<h3>Programming</h3>
			<div class="row my-3">
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/python.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Python Programming</h5>
	    					<p class="card-text">The online training, Programming with Python, is a 6-week training program covering essential concepts on the building blocks of Python, object-oriented programming.</p>
	    					<a href="./route/python.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/web.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Web Development</h5>
	    					<p class="card-text">The Web Development Training by Internshala is a 6-week online training program in the fields of HTML, CSS,Bootstrap, PHP, and MySQLi. Do check it out.</p>
	    					<a href="./route/web.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/ethical.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Ethical Hacking</h5>
	    					<p class="card-text">he Ethical Hacking Training by Internshala is a 8-week online training program in the field of web application security. You will learn how to Control one pc to another.Do Check it out</p>
	    					<a href="./route/ethical.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/android.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Android App Development</h5>
	    					<p class="card-text">Android App Development is a 6-week online training program that will give you a comprehensive introduction to the world of Android. In this training program, you will learn the basics of Kotlin, design UIs using XML, develop multiple Android apps.</p>
	    					<a href="./route/android.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/java.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Core Java</h5>
	    					<p class="card-text">The Core Java Training by Internshala is a 6-weeks online training program covering the basic concepts of Java and Object-Oriented Programming such as arrays, methods, and inheritance, polymorphism, classes etc.We will develop a industry related project too.</p>
	    					<a href="./route/java.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/angular.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Angular JS</h5>
	    					<p class="card-text">The Angular Training by Internshala is a 6-week online training program. In this training, you will learn the basics of Angular framework, building components directives in Angular, store data using forms and Firebase, services, pipes and routing in Angular.</p>
	    					<a href="./route/angular.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/c.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Programming with C and C++</h5>
	    					<p class="card-text">The programming with C and C++ is a 8-weeks online training that will give you a comprehensive introduction to the world of C and C++ programming.</p>
	    					<a href="./route/c.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
		</div>
	</div>
	<!--Datascience-->
	<div class="container">
			<h3>Data Science</h3>
			<div class="row my-3">
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/ml.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Machine Learning</h5>
	    					<p class="card-text">Get yourself a Hands on experience in Machine Learning by making Industry related Projects.</p>
	    					<a href="./route/ml.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/datascience.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Data Analytics in Python</h5>
	    					<p class="card-text">You will learn python libraries like Numpy, Pandas, Matplotlib,etc and how to interact and visualize data.</p>
	    					<a href="./route/data.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
	</div>

	<!--Business-->
	<div class="container">
			<h3>Business</h3>
			<div class="row my-3">
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/digital.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Digital Marketing</h5>
	    					<p class="card-text"> In this training, you learn digital marketing using web analytics, email marketing, SEO, search engine marketing, advertising and social media marketing.</p>
	    					<a href="./route/digitalMarketing.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/excel.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Advance Excel</h5>
	    					<p class="card-text">During the course of this training, students will work on a project unit relating to \'Food2Go\', a food technology startup.Becone an advavce level in maths.</p>
	    					<a href="./route/excel.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/communication.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Business Communications Skills</h5>
	    					<p class="card-text">Learn the skills to become a Business man,how to give presentation in front of many,etc.Learn the way to talk with hr,businessmen etc.</p>
	    					<a href="./route/communication.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
	</div>
	<!--Design-->
	<div class="container">
			<h3>Design</h3>
			<div class="row my-3">
				<div class="col-lg-4 mb-3">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/ui.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">UI/UX Design</h5>
	    					<p class="card-text">In these training you will learn typography,colors,designing with figma,designing your finance app,designing with figma and more. </p>
	    					<a href="./route/ui.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card grey-card">
			            <div class="inner">
			              <img class="card-img-top" src="./train/graphic.jpg" alt="Card image cap">
			            </div>
	  					
	 					<div class="card-body">
	    					<h5 class="card-title">Graphic Design</h5>
	    					<p class="card-text">Graphic Design is a 6-weeks online training that will give you an ultimate exposure to the world of Graphic Design.Learn Adobe Photoshop.</p>
	    					<a href="./route/graphic.php" class="btn btn-outline-success btn-sm">Open</a>
	    					<a href="#" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-rupee-sign"></i> 499</a>
	  					</div>
					</div>
				</div>
	</div>

</body>
</html>


