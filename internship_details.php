<!DOCTYPE html>
<?php 
include("connection.php");
       // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $id=$_GET['msg'];
        $querry="select * from data where id='$id'";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $count= mysqli_num_rows($res);
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIESTASHALA Internships</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="internships.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

    <style>
        .blue-h6 h6 {
            color: rgb(38, 151, 243);
        }
    </style>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #292b2c;">
        <a class="navbar-brand" style="font-size:x-large;" href="#"><i class="fab fa-invision"></i> INIESTASHALA</a>
    </nav>
    <!-- navbar end -->

    <div class="row justify-content-md-center">
        <div class="col-lg-6 middle">
            <h6>Web development internship in <?php echo($out['location']); ?> at <?php echo($out['company_name']); ?></h6>
            <div class="card left">
                <div class="card-header">
                    Web Development
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo($out['company_name']); ?></h5>
                    <p class="card-text">Location : Work from home.</p>
                    <div class="card-text">
                        <div class="card-text">
                            <div class="row">
                                <div class="col-3">
                                    <p>Start Date</p>
                                    <p><?php echo($out['start_date']); ?></p>
                                </div>
                                <div class="col-2">
                                    <p>Duration</p>
                                    <p><?php echo($out['duration'].' month(s)'); ?></p>
                                </div>
                                <div class="col-3">
                                    <p>Stipend</p>
                                    <p><?php echo('₹'.$out['stipend'].'/month'); ?></p>
                                </div>
                                <div class="col-2">
                                    <p>Posted On</p>
                                    <p><?php echo($out['posted_on']); ?></p>
                                </div>
                                <div class="col-2">
                                    <p>Apply By</p>
                                   <p><?php echo($out['apply_by']); ?></p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-muted">
                    Internship | <?php if($out['job_offer']==1){echo "with job offer";}else{echo  "without job offer";} ?> <a href="resume.php?company_id=<?php echo $id;?>">Apply ></a>
                </div>
            </div>
            <div class="card left blue-h6">
                <div class="card-body">
                    <h6>About company</h6>
                    <p><?php echo($out['description']); ?></p>
                    <h6>About internship</h6>
                    <p>Selected intern's day-to-day responsibilities-</p>
                    
                    <p><?php echo($out['responsibility']);?></p>
                    <h6># of internships available : <span style="color: black;"><?php echo($out['openings']); ?></span></h6><br>
                    <h6>Skills Required : <span style="color: black;"><?php echo($out['skills']); ?></span></h6><br>
                    <h6>Who can apply</h6>
                    <p>Only those candidates can appply who:<br>1. are available for the<?php if($out['work_home']==1){echo(" work from home job/internship.");}else{echo(" in office job/internship.");} ?>. <br>2. can start the internship between <?php echo($out['posted_on'].' and '.$out['apply_by']);?>
                         <br>3. are available for duration of <?php echo($out['duration'].' months.') ?> <br>4.Have relevant skills and interest.</p>
                    <h6>Perks</h6>
                    <p><?php echo($out['perks']) ?></p>
                    <br>
                    <div class="text-right">
                        <a class="btn btn-primary" href="resume.php?company_id=<?php echo $id;?>">Appply Now</a>
                    </div>
                    

                </div>
            </div>
        </div>
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
</body>

</html>