<!DOCTYPE html>
<?php 
   function load_cities()
      {include("connection.php");
        $opt='';
 //       $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry="select * from cities";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $count= mysqli_num_rows($res);
        $i=0;
        while($i!=$count)
          {
            $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
            $opt .='<option value="'.$out["city_name"].'">'.$out["city_name"].'</option>';
            $i++;
          }
        return $opt;
      }
     function load_jobs()
      {include("connection.php");
        $opt='';
   //     $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry="select * from category";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $count= mysqli_num_rows($res);
        $i=0;
        while($i!=$count)
          {
            $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
            $opt .='<option value="'.$out["category"].'">'.$out["category"].'</option>';
            $i++;
          }
        return $opt;
      }
    
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
            echo "Your session has expired! <a href='index.php'>sign up here</a>";
}
        else {
           
?>

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
<?php include("header.php"); ?>
    <!-- navbar end -->

    <!-- body -->

    <div class="container-fluid">

        <div class="row">
            <!-- left grid -->
            <div class="col-lg-3 left">
                <!-- <hr class="my-4"> -->
                <div class="card center" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Filter</h5>
                      <hr class="my-4">
                      <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a> -->
                   
                      <h6>Category</h6>
                     <select id="jobs" name="jobs"  class="form-control" multiple >
                           <?php echo load_jobs(); ?>
                       </select>
                      <h6>Location</h6>
                       <select id="cities" name="cities[]"  class="form-control" multiple >
                           <?php echo load_cities(); ?>
                       </select>
                      <input type="checkbox" name="work_home" id="work_home"> <label for="">work from home</label><br>
                      <input type="checkbox" name="partime" id="partime"> <label for="">Partime</label><br>
                      <h6>Starting from</h6>
                      <input class="form-control" id="start_date" type="date" placeholder="enter date">
                      <h6>Max. duration</h6>
                       <select id="duration" name="duration"  class="form-control">
                           <option disabled="true" selected="true" value=0>Duration</option>
                           <option value=1>1</option>
                           <option value=2>2</option>
                           <option value=3>3</option>
                           <option value=4>4</option>
                           <option value=8>8</option>
                           <option value=12>12</option>
                           <option value=24>24</option>
                       </select>
                      <input type="checkbox" name="women_intership" id="women_internship"> <label for="">internships for women</label><br>
                      <input type="checkbox" name="job_offer" id="job_offer"> <label for="">internships with job offer</label><br>
                      <a href="" type="reset">Reset</a>
                      <button class="btn btn-md btn-primary btn-block"  name="submit" id="submit" onclick="show_result()" >Search</button>
                     
                    </div>
                  </div>
            </div>

            <!-- middle grid -->
            <div class="col-lg-6 middle">
                <h4>Internships</h4>
                <div id="result">
                <?php    
                include("connection.php");
      //  $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry="select * from data where approval_status='Approved'";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $count= mysqli_num_rows($res);
        $i=0;
        while($i!=$count)
          {?>   <?php  $out= mysqli_fetch_array($res)or die(mysqli_errno($con)); ?>
                <div class="card left">
                    <div class="card-header">
                      <?php echo($out["job"]); ?>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo($out["company_name"]); ?></h5>
                      <p class="card-text">Location : <?php echo($out["location"]); ?></p>
                      <div class="card-text">
                          <div class="card-text">
                              <div class="row">
                                  <div class="col-3">
                                     <p>Start Date</p>
                                     <p><?php echo($out["start_date"]); ?></p> 
                                  </div>
                                  <div class="col-2">
                                    <p>Duration</p>
                                    <p><?php echo($out["duration"]); ?></p> 
                                 </div>
                                 <div class="col-3">
                                    <p>Stipend</p>
                                    <p>₹<?php echo($out["stipend"]);?>/month</p> 
                                 </div>
                                 <div class="col-2">
                                    <p>Posted On</p>
                                    <p><?php echo($out["posted_on"]);?></p> 
                                 </div>
                                 <div class="col-2">
                                    <p>Apply By</p>
                                    <p><?php echo($out["apply_by"]);?></p> 
                                 </div>

                              </div>
                          </div>
                      </div>

                    </div>
                    <div class="card-footer text-muted">
                      Internship | <?php if($out['job_offer']==1){echo "with job offer";}else{echo  "without job offer";} ?>  <a href="internship_details.php?msg=<?php echo($out['id']); ?>">Apply ></a>
                    </div>
                  </div>
                <?php $i++;}?>
                
            </div>
</div>
            <!-- right grid -->

        </div>


    </div>
    
    <!-- body end -->

  <script>
 
$(document).ready(function(){
      
$("#cities").bsMultiSelect();
$("#jobs").bsMultiSelect();

  show_result();  


});



        function show_result()
        {
                        $(document).ready(function(){

    
 
       var jobs = $("#jobs").val().toString();
       var cities = $("#cities").val().toString();
       var work_home=0;
       if(document.getElementById("work_home").checked===true)
       {
           work_home=1;
       }
       var partime=0;
       if(document.getElementById("partime").checked===true)
       {
           partime=1;
       }
       var start_date = document.getElementById("start_date").value;
       var duration = $("#duration").val();
       var women_internship=0;
       if(document.getElementById("women_internship").checked===true)
       {
           women_internship=1;
       }
       var job_offer=0;
       if(document.getElementById("job_offer").checked===true)
       {
           job_offer=1;
       }

                    
    $.ajax({
                     url:"return_result.php",
                     method:"POST",
                     data:{jobs:jobs,cities:cities,work_home:work_home,partime:partime,start_date:start_date,duration:duration,women_internship:women_internship,job_offer:job_offer},
                     success:function(data)
                      {
                   
                     $("#result").html(data);
                  
                      }
                     });
  
  });
        }

</script>

 
        

        
</body>
<?php  }} ?>