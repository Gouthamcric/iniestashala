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
						<h2 class="p1 mb-3">Data Analysis</h2>
						<p class="lead p1 mb-3">Enter the field of Analysis by using Python</p>
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
					<img src="../train/dataanalysis.jpg">
			    </div>
			</div>	
		</div>		
	</div>
	<div class="jumbotron mb-5">
		<h3 class="text-center text-black">About Data Analysis in Python</h3>
		<p class="text-center">
			Analysis is pictographic representation or visualisation of the data. Seeing so many numbers all over screen might turn out to be a big headache sometimes and difficult to derive insights. The only way of doing this is represent the data in the form of figures like bar graphs, histogram, pie-charts. Python has libraries for this too. For this we use libraries like Matplotlib and Seaborn.
		</p>
	</div>
	<div class="jumbotron p-0">
		<div class="container">
			<h3 class="text-center my-5 mt-5">You Will Learn..</h3>
			<div class="row  justify-content-between">
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body ">
		    					<h5 class="card-title lead">Introduction to Data Analysis</h5>
		    					<p class="card-text">Understand the basics and applications of Data Analysis.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Learn NUMPY</h5>
		    					<p class="card-text">Learn Numpy, understand mathematics behind it..</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Learn Pandas</h5>
		    					<p class="card-text">Understand methods of DataFrames and use as a data structure.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Learn Matplotlib</h5>
		    					<p class="card-text">Visualization is very simple with this library.Making of histograms,graphs,etc.</p>
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
	                                You will learn 6 real world problems with real analysis.
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