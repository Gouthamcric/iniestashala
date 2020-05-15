<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  	<link rel="stylesheet" type="text/css" href="">
  	 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,700&display=swap" rel="stylesheet">
  	 <style type="text/css">
  	 	.details{

  	 		display: inline-block;
  	 		height: 30vh;
  	 	}
  	 	.specific{
  	 		background: black;
  	 	}
  	 	.p1{
  	 		 color: white;
  	 		 font-weight: 700em;
  	 	}
  	 	.forms{
  	 		background:grey;
  	 	}
  	 	.part2 img{
  	 		background-repeat: no-repeat;
  	 		background-size: cover;
  	 		width: 100%;
  	 		height: 100%;
  	 	}
  	 	.card:hover {
    			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
		}
		.c1{
			height: 250px;
		}


  	 </style>
</head>
<body>
     <?php if(isset($_SESSION['id'])){include "header.php";} else {include "header_2.php";} ?>

	<div class="container-fluid">
		<div class="specific">
			<div class="row">
				<div class="col-md-7 mt-5 text-center">
						<h2 class="p1 mb-3">Angular Training</h2>
						<p class="lead p1 mb-3">Learn Angular and create your own social blogging website</p>
						<hr style="background: white;">
						<div class="details d-flex justify-content-center ">
							<p class="mx-3 p1">Online</p>
							<span class="p1">|</span>
							<p class="mx-3 p1">Duration : 6 weeks</p>
							<span class="p1">|</span>
							<p class="ml-3 p1">Certified Training</p>
						</div>
				</div>
				<div class="col-md-5 col-12 part2">
					<img src="https://images.unsplash.com/photo-1518932945647-7a1c969f8be2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			    </div>
			</div>	
		</div>		
	</div>
	<div class="jumbotron mb-5">
		<h3 class="text-center text-black">About Programming with Angular</h3>
		<p class="text-center">
			The Angular Training by Internshala is a 6-week online training program. In this training, you will learn the basics of Angular framework, building components directives in Angular, store data using forms and Firebase, services, pipes and routing in Angular. At the end of this training, you will develop a social blogging platform and learn how to store data using a cloud back-end. Familiarity with basics of HTML.
		</p>
	</div>
	<div class="jumbotron p-0">
		<div class="container">
			<h3 class="text-center my-5 mt-5">You Will Learn..</h3>
			<div class="row  justify-content-between">
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body ">
		    					<h5 class="card-title lead">Getting started with Angular</h5>
		    					<p class="card-text">Understand Angular, its origin, uses and different versions. Prepare the environment to get started for developing apps with Angular.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Using Variables in Python</h5>
		    					<p class="card-text">Learn about numeric, string, sequence and dictionary data types and relevant operations while practicing Python syntax. Learn the basics of a variables.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Basics Programming in Python</h5>
		    					<p class="card-text">Learn how to write programs using conditionals, loops, iterators and generators, functions and modules and packages.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Priciples of Object Oriented Programming(OOP)</h5>
		    					<p class="card-text">Learn about the important features of OOP while using classes and objects: two main aspects of the OOP paradigm.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Extensible</h5>
		    					<p class="card-text">It implies that other languages such as C/C++ can be used to compile the code and thus it can be used further in our python code which makes it more usefull.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Large and Standard Library</h5>
		    					<p class="card-text">Python has a large and broad library and prvides rich set of module and functions for rapid application development.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Free and Open source</h5>
		    					<p class="card-text">Python language is freely available at offical web address.The source-code is also available. Therefore it is open source.No of Libraries are there.
								</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Cross Platform Language</h5>
		    					<p class="card-text">Python can run equally on different platforms such as Windows, Linux, Unix and Macintosh etc. So, we can say that Python is a portable language.</p>
		  					</div>
					</div>
				</div>
		   </div>		
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="item col-6 mb-4">
					<div class="card ">
						<div class="row">
							<div class="icon col-md-3">
								<img src="../train/user.jpg" class="img-fluid">
							</div>
							<div class="card_details col-md-9">
								<div class="card_title"><p style="margin:0px 0px 10px;">Placement Training</p></div>
								<div class="card_description"><p>
	                                Get complimentary access to placement training to ace your internship/job hunt.
	                            </p></div>
							</div>
						</div>
					</div>
			</div>
			<div class="item col-6 mb-4">
					<div class="card ">
						<div class="row">
							<div class="icon col-md-3">
								<img src="../train/industry.jpg" class="img-fluid">
							</div>
							<div class="card_details col-md-9">
								<div class="card_title"><p style="margin:0px 0px 10px;">Industrial Project</p></div>
								<div class="card_description"><p>
	                                Create a smart blogging Platform using this platform.
	                            </p></div>
							</div>
						</div>
					</div>
			</div>
			<div class="item col-6 mb-4">
					<div class="card">
						<div class="row">
							<div class="icon col-md-3">
								<img src="../train/files.jpg" class="img-fluid">
							</div>
							<div class="card_details col-md-9">
								<div class="card_title"><p style="margin:0px 0px 10px;">Hands On Excersise</p></div>
								<div class="card_description"><p>
	                                Get Hands on excercise with professiona mentor as your tutor. 
	                            </p></div>
							</div>
						</div>
					</div>
			</div>
			<div class="item col-6 mb-4">
					<div class="card ">
						<div class="row">
							<div class="icon col-md-3">
								<img src="../train/certi.jpg" class="img-fluid">
							</div>
							<div class="card_details col-md-9">
								<div class="card_title"><p style="margin:0px 0px 10px;">Certified Training</p></div>
								<div class="card_description"><p>
	                                Get the certififcate after Sucessfull completion of course.
	                            </p></div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	

		

</body>
</html>