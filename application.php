<!DOCTYPE html>
<?php
    $applicant_id=$_GET['applicant_id'];
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
        $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from users where email="'.$applicant_id.'"';
        $querry2='select * from application where applicant_id="'.$applicant_id.'"';
        
        
        $res= mysqli_query($con, $querry);
        $res2= mysqli_query($con, $querry2);
        $out= mysqli_fetch_array($res);
        $out2= mysqli_fetch_array($res2);
        $querry3='select * from data where id="'.$out2['company_id'].'"';
        $res3= mysqli_query($con, $querry3);
        $out3= mysqli_fetch_array($res3);
?>
<html>

<head>
    <title>Application</title>
    <link rel="stylesheet" href="application.css">
</head>

<body>
    <h2 style="background-color: rgb(226, 228, 228); text-align: center;">This has been posted for
        <span style="color: rgb(113, 180, 235);"><?php echo $out3['job']; ?></span>
    </h2>
    <div class="container">
        <div class="mf">
            <div class="bio">
                <div class="details">
                    <h2><?php echo $out['first_name']." ".$out['last_name']; ?></h2>
                    <p><?php echo $out['city1'].",".$out['city2']; ?></p>
                </div>
                <div class="time"><?php echo $out2['app_status'] ?><p class="Idays">Applied on <?php echo $out2['date'] ?></p>
                </div>
            </div>
            <div class="assesment">
                <h1>Assesment</h1>
                <div class="qna">
                    <div class="q/a">
             <?php $data = explode (",", $out2['answers']); ?>
                        <h3>Q. Why should you be hired for this role?</h3>
                        <p>Ans. <?php echo $data[0]; ?>.</p>
                        <h3>Q. Are you available for given month(s) starting immediately, for a full time
                                internship?</h3>
                        <p>Ans. <?php echo $data[1]; ?>.</p>
                                  <?php $data = explode (",", $out3['questions']); 
                                  $n= count($data);
                                        $data_ans = explode (",", $out2['answers']); 
                                  
                           if($n>1){
                               for($i=0;$i<$n;$i++){?>
                        <h3>Q. <?php echo $data[$i]; ?></h3>
                        <p>Ans. <?php echo $data_ans[$i+2]; ?>.</p>
                           <?php }}  ?>
                    </div>
                    <!--add more here only q/a div-->
                </div>
            </div>

            <div class="resume">
                <h2>Resume</h2>
                <div class="properties">
                    <div class="property">
                        <div class="type">Education</div>
                        <div class="description">
          <?php $data = explode ("@", $out['education']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                            <p class="desc">year of completion: <?php echo $sub_data[1]; ?></p>
                            <p class="desc">percentage: <?php echo $sub_data[2]; ?></p> 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                                <div class="properties">
                    <div class="property">
                        <div class="type">Internships</div>
                        <div class="description">
          <?php $data = explode ("@", $out['internships']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                            <p class="desc">Job title: <?php echo $sub_data[1]; ?></p>
                            <p class="desc">Duration: <?php echo $sub_data[2]; ?></p> 
                 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                                               <div class="properties">
                    <div class="property">
                        <div class="type">Trainings</div>
                        <div class="description">
          <?php $data = explode ("@", $out['trainings']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                           
                            <p class="desc">Duration: <?php echo $sub_data[1]; ?></p> 
                 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                                                               <div class="properties">
                    <div class="property">
                        <div class="type">Projects</div>
                        <div class="description">
          <?php $data = explode ("@", $out['projects']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode ("#", $data[$i]);
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                           
                            <p class="desc">About: <?php echo $sub_data[1]; ?></p> 
                 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                                                                               <div class="properties">
                    <div class="property">
                        <div class="type">Projects</div>
                        <div class="description">
          <?php $data = explode ("^", $out['work_samples']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                           
                             <p class="desc"><b>GitHub profile : <a href="<?php echo $sub_data[0]; ?>"><?php echo $sub_data[0]; ?></a></b></p>
                            <p class="desc">Other portfolio : <a href="<?php echo $sub_data[1]; ?>"><?php echo $sub_data[1]; ?></a></p>
                 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                                                                                              <div class="properties">
                    <div class="property">
                        <div class="type">Projects</div>
                        <div class="description">
          <?php $data = explode ("@", $out['additional_details']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n;$i++){
                                  
                            ?>
                             <h3 class="heading"><b><?php echo $sub_data[0]; ?></b></h3>
                      
                 
                           <?php }}?>
                            <!--add more here only h3 and p-->
                        </div>
            
                    </div>
          
                </div>
                <div class="skills">
                    <div class="type">Skills</div>
                    
                                                         <?php $data = explode ("@", $out['skills']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                        
                               
                        
                         
                         
                    <div class="d1">
                        <div class="descr">
                            <h3 class="heading"><a href="">
                                <b style="font-size: xx-large; color: red;">
                                -</b></a><?php echo $sub_data[0]; ?></h3>
                            <p class="desc"><?php echo $sub_data[1]; ?></p>
                            <!--add more here only h3 and p-->
                        </div>
                  
                    </div>
  <?php }}?>
                </div>

                <div class="contact">
                    <div class="type">Contact Details</div>
                    <div class="description">
                        <span>Phone no. <b>+91 <?php echo $out['phone']?></b></span><br>
                        <span>Email: <b><?php echo $out['email']?></b></span>
                        <!--add more here only span elements-->
                     
                    </div>
       
                </div>
                

            </div>
        </div>
    </div>
</body>

</html>
<?php }} ?>