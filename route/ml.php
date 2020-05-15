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
						<h2 class="p1 mb-3">Machine Learning</h2>
						<p class="lead p1 mb-3">Learn Machine Learning From Scratch and take first step towards AI</p>
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
					<img src="../train/ml.jpg">
			    </div>
			</div>	
		</div>		
	</div>
	<div class="jumbotron mb-5">
		<h3 class="text-center text-black">About Machine Learning training</h3>
		<p class="text-center">
			Machine Learning is a 6-week online training program which will give you a comprehensive introduction to the world of Machine Learning. In this training program, you will learn Python programming, steps involved in ML life cycle, visualization techniques for data analysis, and various Machine Learning algorithms. This training program has video tutorials and is packed with assignments, assessments tests, quizzes, and practice exercises for you to get a hands-on learning experience
		</p>
	</div>
	<div class="jumbotron p-0">
		<div class="container">
			<h3 class="text-center my-5 mt-5">You Will Learn..</h3>
			<div class="row  justify-content-between">
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body ">
		    					<h5 class="card-title lead">Introduction to Machine Learning</h5>
		    					<p class="card-text">Understand the basics and applications of Machine Learning.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Python for Machine Learning</h5>
		    					<p class="card-text">Learn basics of Python programming, data types in Python and how to work with DataFrames.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Machine Lerning Life Cycle</h5>
		    					<p class="card-text">Learn steps to build machine learning models and understand various visualization techniques.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Data Exploration and Manipulation</h5>
		    					<p class="card-text">Learn data exploration and manipulation using univariate and bivariate analysis.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Build your first model</h5>
		    					<p class="card-text">Learn to prepare a dataset and build your first model for regression and classification problem.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Decision trees</h5>
		    					<p class="card-text">Understand how the decision tree algorithm works and learn about the different techniques used for splitting. Build a decision tree model.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">KNN</h5>
		    					<p class="card-text">Learn how to build a kNN model and understand multiple distance metrics
								</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">logistic Regression</h5>
		    					<p class="card-text">Learn how to build and implement logistic regression.</p>
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
	                                You will build a predictive model to find out a bank's customer retention for their savings account..
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