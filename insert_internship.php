<?php
   $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
       $querry='insert into data(job,work_home,partime,start_date,duration,internship_women,job_offer,company_name,location,stipend,posted_on,apply_by,category,openings,responsibility,perks,skills,questions,description) values("'.$_POST['job'].'","'.$_POST['work_home'].'","'.$_POST['partime'].'","'.$_POST['start_date'].'","'.$_POST['duration'].'","'.$_POST['internship_women'].'","'.$_POST['job_offer'].'","'.$_POST['company_name'].'","'.$_POST['location'].'","'.$_POST['stipend'].'","'.$_POST['posted_on'].'","'.$_POST['apply_by'].'","'.$_POST['category'].'","'.$_POST['openings'].'","'.$_POST['res'].'","'.$_POST['perks'].'","'.$_POST['skills'].'","'.$_POST['questions'].'","'.$_POST['description'].'")';
  // $querry='insert into data values("dsadsadsa")'; 
   $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        echo "posted successfully!";
?>

