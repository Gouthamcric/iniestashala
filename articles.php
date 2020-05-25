<?php
?>
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
</head>
<body>
    <?php if(!isset($_SESSION['id'])){include('header_2.php');} else {include("header.php");} ?>
	<div class="container">
		<div class="jumbotron">
			<h2 class="text-center">Lets learn Something about Internships..</h2>
		</div>	
	
		<div class="card mb-3">
			  <img class="card-img-top " src="./train/internship.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h2 class="card-title">What is an Internship?</h2>
			    <p class="card-text lead">An internship is a period of work experience offered by an employer to give students and graduates exposure to the working environment, often within a specific industry, which relates to their field of study.</p>
			    <p class="lead">
				Internships can be as short as a week or as long as 12 months. They can be paid or voluntary; however, before you start an internship it’s important to know your rights with regards to getting paid.</p>
				<p class="lead">
				Internships can be done in a range of sectors, including sales, marketing, engineering, graphic design, management, I.T. and many, many more. Throughout an internship you will develop a variety of soft skills, including communication skills, personal effectiveness, presentation skills, creative problem solving and influencing skills.</p>
	 		 </div>
		</div>
		<div class="card mb-3">
			  <img class="card-img-top " src="./train/internship1.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h2 class="card-title">How to get an Internship</h2>
			    <h4>Our own Iniesta site provide many internship ,once you enroll for the course.</h4>
			    <p class="card-text lead">Use Internship Finders or internship search engines like internships.com. You can also Google internships for great results. Try adding your location to refine your search: internships near me, or internships california will do the trick. See a list of the best internship websites below.</p>
				<p class="lead">Take Advantage of Social Media. Make sure you follow companies you'd love to work for. Most organizations nowadays post information about available internships on their social media profiles.</p>
				<p class="lead">Browse Regular Job Boards like Indeed Glassdoor, or Monster. As with Google, you can filter for your dream internship location: San Francisco, New York City, Washington, DC? Sky is the limit!
				Go to Job Fairs. Sound outdated? That’s why most graduates avoid them and why you’ll stand out when you don’t. Go late to the event to get more time with hiring managers.</p>
				<p class="lead">Learn Networking. Most people think that means calling your dad’s friends. Read up on informational interviews to supersize your social muscle and find internships fast.
				Visit a Local Career Center and speak with career counselors—they'll tell you everything there is to know about about internship opportunities in your area. Plus, you can always count on free advice on the best career paths to choose.</p>

	 		 </div>
		</div>
	</div>

</body>
</html>


