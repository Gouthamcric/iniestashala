<?php 

if(isset($_POST['city'])){
   $city=$_POST["city"];
include("connection.php");       
// $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry="select city_state from cities where city_name='$city'";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        $state=$out["city_state"];
        $querry="select * from cities where city_state='$state'";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $cities="";
        $count= mysqli_num_rows($res);
        $i=0;
        while($i!=$count)
          {$out= mysqli_fetch_array($res)or die(mysqli_errno($con));
            $cities.=$out["city_name"].",";
            $i++;
            if($i==8)
            {break;}
          }
          
        echo substr($cities, 0,  strlen($cities)-1);
}
else if(isset($_POST['job'])){
   $job=$_POST["job"];
include("connection.php");      
//  $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry="select category from data where job='$job'";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        $category=$out["category"];
   
          
        echo $category;
}
else{
$jobs=explode(',', $_POST['jobs']);
$cities=explode(',', $_POST['cities']);
$cities_str="";
if(sizeof($cities)>=1){
    for($i=0;$i<sizeof($cities);$i++)
    {
        $cities_str .= "location like '%".$cities[$i]."%' or ";
    }
$cities_str=  substr($cities_str, 0,  strlen($cities_str)-4);
       
}

$jobs_str="";
if(sizeof($jobs)>=1){
    for($i=0;$i<sizeof($jobs);$i++)
    {
        $jobs_str .= "category like '%".$jobs[$i]."%' or ";
    }
$jobs_str=  substr($jobs_str, 0,  strlen($jobs_str)-4);
       
}


$work_home=$_REQUEST['work_home'];
$partime=$_REQUEST['partime'];
$start_date=$_POST['start_date'];
if($start_date!=""){
$parts = explode('-', $_POST['start_date']);
$start_date  = "$parts[0]-$parts[1]-$parts[2]";
}
$duration=$_REQUEST['duration'];
$women_internship=$_REQUEST['women_internship'];
$job_offer=$_REQUEST['job_offer'];

//echo($jobs_str.$cities_str.$work_home.$partime.$start_date.$duration.$women_internship.$job_offer);

include("connection.php");
 //    $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
     $querry="select * from data where id!='' and approval_status='Approved'";
     if($jobs_str!="")
     {$querry.=" and ".$jobs_str;}
     if($cities_str!="")
     {$querry.=" and ".$cities_str;}
     if($work_home!=0)
     {$querry.=" and work_home=".$work_home;}
      if($partime!=0)
     {$querry.=" and partime= ".$partime;}
      if($start_date!=0)
     {$querry.=" and start_date> '".$start_date."'";}
      if($duration!=0)
     {$querry.=" and duration<= ".$duration;}
      if($women_internship!=0)
     {$querry.=" and internship_women= ".$women_internship;}
      if($job_offer!=0)
     {$querry.=" and job_offer= ".$job_offer;}
  

        $res= mysqli_query($con, $querry);
   
        $count= mysqli_num_rows($res);
  
        $i=0;
        $str='';
        while($i!=$count){$out= mysqli_fetch_array($res)or die(mysqli_errno($con));
       echo '                <div class="card left">
                    <div class="card-header">
                      '.$out["job"].'
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">'.$out["company_name"].'</h5>
                      <p class="card-text">Location :'.$out["location"].'</p>
                      <div class="card-text">
                          <div class="card-text">
                              <div class="row">
                                  <div class="col-3">
                                     <p>Start Date</p>
                                     <p>'.$out["start_date"].'</p> 
                                  </div>
                                  <div class="col-2">
                                    <p>Duration</p>
                                    <p>'.$out["duration"].'</p> 
                                 </div>
                                 <div class="col-3">
                                    <p>Stipend</p>
                                    <p>₹'.$out["stipend"].'/month</p> 
                                 </div>
                                 <div class="col-2">
                                    <p>Posted On</p>
                                    <p>'.$out["posted_on"].'</p> 
                                 </div>
                                 <div class="col-2">
                                    <p>Apply By</p>
                                    <p>'.$out["apply_by"].'</p> 
                                 </div>

                              </div>
                          </div>
                      </div>

                    </div>
                    <div class="card-footer text-muted">
                      Internship | With job offer  <a href="internship_details.php?msg='.$out['id'].'">Apply ></a>
                    </div>
                  </div>';
        $i++;
        }
}

  ?>
 
