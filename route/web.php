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
						<h2 class="p1 mb-3">Web Development</h2>
						<p class="lead p1 mb-3">Build A Beautiful E Commerce Website from scratch.</p>
						<hr style="background: white;">
						<div class="details d-flex justify-content-center ">
							<p class="mx-3 p1">Online</p>
							<span class="p1">|</span>
							<p class="mx-3 p1">Duration : 6 weeks</p>
							<span class="p1">|</span>
							<p class="ml-3 p1">Certified Training</p>
						</div>
				</div>
				<div class="col-md-5 part2">
					<img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			    </div>
			</div>	
		</div>		
	</div>
	<div class="jumbotron mb-5">
		<h3 class="text-center text-black">About Web Development</h3>
		<p class="text-center">
			Go from no-code to an in-demand junior web developer, at a fraction of the cost of a bootcamp. Start with the front-end by learning HTML, CSS, and JavaScript. Then, master the back-end and APIs to round out your full-stack skills.This is the only complete beginner full-stack developer course that covers NodeJS.The course is constantly updated with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.
		</p>
	</div>
	<div class="jumbotron p-0">
		<div class="container">
			<h3 class="text-center my-5 mt-5">You Will Learn..</h3>
			<div class="row  justify-content-between">
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body ">
		    					<h5 class="card-title lead">Introduction to HTML</h5>
		    					<p class="card-text">Learn the basics of HTML.Learn how to structure the Elements in HTML.Learn HTML 5 for form validations and many more.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Learn CSS</h5>
		    					<p class="card-text">Want to how to style your elemnts ?. CSS is not onlyabout styling but it also comes with responsiveness.Lets learn.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">JavaScript</h5>
		    					<p class="card-text">Structuring and Styling is fine but makingit interactive makes you a good web developer.Javascript is all about it. learn OOPs.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Bootstrap 4</h5>
		    					<p class="card-text">A complete Responsive CSS framework Bootstrap which makes the task easy.Upgrade your resume skills.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">APIs</h5>
		    					<p class="card-text">Get cleared with the doubts of APIs you have.Build a Project implementing a  API.Build a weather system using Api.</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6 ">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">MongoDB</h5>
		    					<p class="card-text">A non relatinal database,learn the basics to advanced in mongo,which will be used itthese course.many high based company are using it..</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Express</h5>
		    					<p class="card-text">Learn the JS framework - Express and explore it.We will built 10+ projects in these.Get comfortable with express.Learn npm.
								</p>
		  					</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="card c1 grey-card mb-4">
		 					<div class="card-body">
		    					<h5 class="card-title lead">Real world apps</h5>
		    					<p class="card-text">Build real world 10+ apps and blog and get comfortable with web development and be a freelance and start earn. Start exploring.</p>
		  					</div>
					</div>
				</div>
		   </div>		
	    </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="item col-6 mb-4">
					<div class="card">
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
					<div class="card">
						<div class="row">
							<div class="icon col-md-3">
								<img src="../train/industry.jpg" class="img-fluid">
							</div>
							<div class="card_details col-md-9">
								<div class="card_title"><p style="margin:0px 0px 10px;">Industrial Project</p></div>
								<div class="card_description"><p>
	                                Build a ecommerce website from scratch.
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
					<div class="card">
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