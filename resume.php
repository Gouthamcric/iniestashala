<?php
if(isset($_GET['company_id'])){
$company_id=$_GET['company_id'];}
else
{$company_id="not set";}
session_start();
if(!isset($_SESSION['id'])){
   
header('location: login.php?msg=kindly sign in first');
exit;
}

else
{ $now = time();
 if ($now > $_SESSION['expire']) {
    
            session_unset();
             session_destroy();
            echo "Your session has expired! <a href='registerStudent.php'>sign up here</a>";
}
        else {
            include("connection.php");
   //     $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from users where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>internshiparoma|Resume</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
        background-color: grey;
    }

    .resume a {
        color: grey;
    }

    .resume a:hover {
        color: black;
        cursor: pointer;
    }

    .row {
        margin: 0;
    }
    .card-header {
        padding: 0;
    }
    .modal-header {
        background-color: rgb(45, 142, 223);
        color: white;
    }
</style>

<body>

    <!-- navbar -->
<?php include("header.php"); ?>
    <!-- navbar end -->
    <br>
    <div class="resume">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h3 class="card-title"><?php echo $out['first_name']." ".$out['last_name']; ?></h3>
                        <p class="card-text"><?php echo $out['email']; ?> <br>+91 <?php echo $out['phone']?> <br><?php echo $out['city1']; ?></p>
                        <hr>
                        <h5 class="card-title text-primary">Education</h5>
                        <div id="education">
                            <?php $edu = explode ("@", $out['education']);
                           $n= count($edu);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_edu = explode (",", $edu[$i]);
                            ?>
                             <h6><b><?php echo $sub_edu[0]; ?></b></h6>
                            <h6>year of completion: <?php echo $sub_edu[1]; ?></h6>
                            <h6>percentage: <?php echo $sub_edu[2]; ?></h6> 
                           <?php }}?>
                        </div>
                        <br>
                        <a id="add-education" data-toggle="modal" data-target="#educationModalScrollable">+ Add
                            Education</a>
                        <hr>
                        <h5 class="card-title text-primary">Internships</h5>
                        <div id="internships">
                            <?php $data = explode ("@", $out['internships']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h6><b><?php echo $sub_data[0]; ?></b></h6>
                            <h6>Job title: <?php echo $sub_data[1]; ?></h6>
                            <h6>Duration: <?php echo $sub_data[2]; ?></h6> 
                           <?php }}?>
                        </div>
                        <br>
                        <a id="add-internship" data-toggle="modal" data-target="#internshipsModalScrollable">+ Add
                            Internship</a>
                        <hr>
                        <h5 class="card-title text-primary">Trainings</h5>
                        <div id="trainings">
                            <?php $data = explode ("@", $out['trainings']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h6><b><?php echo $sub_data[0]; ?></b></h6>
                            <h6>Duration: <?php echo $sub_data[1]; ?></h6>
                           <?php }}?>
                        </div>
                        <br>
                        <a id="add-training" data-toggle="modal" data-target="#trainingsModalScrollable">+ Add
                            Training</a>
                        <hr>
                        <h5 class="card-title text-primary">Projects</h5>
                        <div id="projects">
                            <?php $data = explode ("@", $out['projects']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode ("#", $data[$i]);
                            ?>
                             <h6><b><?php echo $sub_data[0]; ?></b></h6>
                            <h6>About: <?php echo $sub_data[1]; ?></h6>
                           <?php }}?>
                        </div>
                        <br>
                        <a id="add-project" data-toggle="modal" data-target="#projectsModalScrollable">+ Add Project</a>
                        <hr>
                        <h5 class="card-title text-primary">Skills</h5>
                        <div id="skills">
                            <ul>
                                                         <?php $data = explode ("@", $out['skills']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                                <li><?php echo $sub_data[0]." - ".$sub_data[1]; ?></li>
                               
                        
                           <?php }}?>
                            </ul>
                        </div>
                        <br>
                        <a id="add-skill" data-toggle="modal" data-target="#skillsModalScrollable">+ Add Skill</a>
                        <hr>
                        <h5 class="card-title text-primary">Work Samples</h5>
                        <div id="work-samples">
                         <?php $data = explode ("^", $out['work_samples']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                            <h6><b>GitHub profile : <a href="<?php echo $sub_data[0]; ?>"><?php echo $sub_data[0]; ?></a></b></h6>
                            <h6>Other portfolio : <a href="<?php echo $sub_data[1]; ?>"><?php echo $sub_data[1]; ?></a></h6>
                           <?php }}?>
                        </div>
                        <br>
                        <a id="add-work-sample" data-toggle="modal" data-target="#work-samplesModalScrollable">+ Add
                            Work Sample</a>
                        <hr>
                        <h5 class="card-title text-primary">Additional Details</h5>
                        <div id="additional-details">
                            <ul>
                                                         <?php $data = explode ("@", $out['additional_details']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                            
                            ?>
                  
                     
                                <li><?php echo $data[$i]; ?></li>
                                      <?php }}?>
                            </ul>
                        </div>
                        <br>
                        <a id="add-additional-detail" data-toggle="modal"
                            data-target="#additional-detailsModalScrollable">+ Add Additional Details</a>
                    </div>
            <?php        if($company_id=="not set"){ echo '<a href="internships.php" class="btn btn-primary" style="color:white;">Submit</a> ';}
                    else{ 
                   echo ' <a href="evaluation.php?company_id='.$company_id.'" class="btn btn-primary" style="color:white;">Submit</a> ';   
                     }?>
                </div>
            </div>
        </div>
    </div><br>
    <!-- ---------------------------------modal------------------------------------------------ -->




    <!-- ---------------------------------------------education-------------------------------------------------- -->

    <div class="modal fade" id="educationModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="educationModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="educationModalScrollableTitle">Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Standard</h6>
                    <input id="standard-input" class="form-control" type="text" placeholder="example: X, XII or <Graduation - mention name of the degree>">
                    <br><h6>Year of completion</h6>
                    <input id="year-of-completion-input" type="text" class="form-control" placeholder="year in numbers like 2014"><br>
                    <h6>Percentage</h6>
                    <input id="percentage-input" type="text" class="form-control" placeholder="percentage in numbers without percentage sign">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-education-btn" type="button" data-dismiss="modal" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------internships-------------------------------------------------- -->

    <div class="modal fade" id="internshipsModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="internshipsModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Past Internships</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Company</h6>
                    <input id="internship-company-input" class="form-control" type="text" placeholder="name of company">
                    <br>
                    <h6>Title</h6>
                    <input id="internship-title-input" class="form-control" type="text" placeholder="example: web developer">
                    <br>
                    <h6>Time Span</h6>
                    <input id="internship-time-input" class="form-control" type="text" placeholder="enter number of months">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-internship-btn" type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------trainings-------------------------------------------------- -->

    <div class="modal fade" id="trainingsModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="trainingsModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Trainings</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Course</h6>
                    <input id="course-name-input" class="form-control" type="text" placeholder="example: IOT, Web development etc">
                    <br>
                    <h6>Time Span</h6>
                    <input id="course-time-input" class="form-control" type="text" placeholder="enter number of months">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-training-btn" type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------projects------------------------------------------------- -->

    <div class="modal fade" id="projectsModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="projectsModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Projects</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Name</h6>
                    <input id="project-name-input" class="form-control" type="text" placeholder="name of project">
                    <br>
                    <h6>About</h6>
                    <textarea id="about-project-input" class="form-control" type="text" rows="5" cols="50"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-project-btn" type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------skills-------------------------------------------------- -->

    <div class="modal fade" id="skillsModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="skillsModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Skills</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Skill</h6>
                    <input id="skill-name-input" class="form-control" type="text" placeholder="skill name">
                    <br>
                    <h6>Level</h6>
                    <select class="form-control" name="" id="level-input">
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-skill-btn" type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------work-samples-------------------------------------------------- -->

    <div class="modal fade" id="work-samplesModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="work-samplesModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Work-Samples</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="">
                <div class="modal-body">
                    <h6>GitHub Profile</h6>
                    <input id="github-profile-input" class="form-control" type="text" placeholder="enter GitHub profile link">
                    <br>
                    <h6>Other Portfolio Link</h6>
                    <input id="other-portfolio-input" class="form-control" type="text" placeholder="enter other Portfolio link">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="add-work-sample-btn" type="button" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ---------------------------------------------additional-details-------------------------------------------------- -->

    <div class="modal fade" id="additional-detailsModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="additional-detailsModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Additional Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" name="" id="additional-details-input" cols="50" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-additional-detail-btn" type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

                  
                      
            
    <!-- ---------------------------------madal-end-------------------------------------------------- -->



    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
<?php }} ?>