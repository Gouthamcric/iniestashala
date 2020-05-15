<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id'])){header('location: admin_login.php?msg=kindly sign in first');
exit;}
else{
include("connection.php");
$query="select * from data";
$res=  mysqli_query($con, $query);
$count= mysqli_num_rows($res);
$i=0;
$query2="select * from users";
$res2=  mysqli_query($con, $query2);
$count2= mysqli_num_rows($res2);
$i2=0;
$query3="select * from application";
$res3=  mysqli_query($con, $query3);
$count3= mysqli_num_rows($res3);
$i3=0;
$query4="select * from cities";
$res4=  mysqli_query($con, $query4);
$count4= mysqli_num_rows($res4);
$i4=0;
$query5="select * from category";
$res5=  mysqli_query($con, $query5);
$count5= mysqli_num_rows($res5);
$i5=0;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>internshiparoma|admin_panel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
               <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
  


    <style>
        html {
            min-height: 100%;
        }

        body {
            min-height: 100%;
            background-image: -webkit-linear-gradient(65deg, rgba(105, 211, 230, 0.479), rgb(255, 255, 255));
            text-align: center;
        }

        .nav-container {
            padding: 1% 5%;
            border-radius: 50px;
            opacity: 0.9;
        }

        .heading {
            padding: 0.5%;
            border-radius: 0 0 100px 100px;
            opacity: 0.9;
        }

        table {
            font-size: 11px;
            width: 100%;
            margin: 0;
        }

        td div {
            width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        th,
        td {
            padding: 4px;
            border: 1px solid white;
            margin: 0;
        }

        td a {
            color: black;
        }

        td a:hover {
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <div class="heading bg-dark text-light"> <h1>Admin Panel</h1>  <a href="logout.php" style="color:red">Logout</a></div>

    <div class="nav-container container bg-dark text-light mt-2">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-jobs-tab" data-toggle="tab" href="#nav-jobs" role="tab"
                    aria-controls="nav-home" aria-selected="true">Posted Jobs</a>
                <a class="nav-item nav-link" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab"
                    aria-controls="nav-profile" aria-selected="false">Users</a>
                <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab"
                    aria-controls="nav-contact" aria-selected="false">Application Status</a>
                <a class="nav-item nav-link" id="nav-city-tab" data-toggle="tab" href="#nav-city" role="tab"
                    aria-controls="nav-contact" aria-selected="false">cities</a>
                                <a class="nav-item nav-link" id="nav-category-tab" data-toggle="tab" href="#nav-category" role="tab"
                    aria-controls="nav-contact" aria-selected="false">category</a>
            </div>
        </nav>
    </div>

    <div class="tab-content" id="nav-tabContent">
        <!------------------------------------------- Jobs ------------------------------------------------------->
        <div class="tab-pane fade show active mt-2 ml-1 mr-1 table-responsive" id="nav-jobs" role="tabpanel"
            aria-labelledby="nav-jobs-tab">
            <table class="mr-auto ml-auto mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Approval status</th>
                        <th>job</th>
                        <th>work_home</th>
                        <th>part_time</th>
                        <th>start_date</th>
                        <th>duration</th>
                        <th style="">internship_women</th>
                        <th>job_offer</th>
                        <th>company_name</th>
                        <th>location</th>
                        <th>stipend</th>
                        <th>posted_on</th>
                        <th>apply_by</th>
                        
                        <th>openings</th>
                        <th>responsibilities</th>
                        <th>perks</th>
                        <th>skills</th>
                        <th>questions</th>
                        <th>description</th>
                        <th>owner</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($i!=$count){$out= mysqli_fetch_array($res)or die(mysqli_errno($con)); ?>
                    <tr id="<?php echo 'row'.$out['id']; ?>">
                        <td><button href="" class="delete"  data-id="<?php echo $out['id']; ?>"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                        <td><button href="" class="tick" data-id="<?php echo $out['id']; ?>"><i class="far fa-check-circle text-success fa-2x"></i></button> <br><br>
                            <button href="" class="cross" data-id="<?php echo $out['id']; ?>"><i class="far fa-times-circle text-danger fa-2x"></i></button></td>
                        <td id="<?php echo 'col'.$out['id']; ?>"><?php echo $out['approval_status']; ?></td>
                        <td><?php echo $out['job']; ?></td>
                        <td><?php if($out['work_home']=="1"){echo "Yes";}else{echo "No";}; ?></td>
                        <td><?php if($out['partime']=="1"){echo "Yes";}else{echo "No";}; ?></td>
                        <td><?php echo $out['start_date']; ?></td>
                        <td><?php echo $out['duration']; ?></td>
                        <td><?php if($out['internship_women']=="1"){echo "Yes";}else{echo "No";}; ?></td>
                        <td><?php if($out['job_offer']=="1"){echo "Yes";}else{echo "No";}; ?></td>
                        <td><?php echo $out['company_name']; ?></td>
                        <td><?php echo $out['location']; ?></td>
                        <td><?php echo $out['stipend']; ?></td>
                        <td><?php echo $out['posted_on']; ?></td>
                        <td><?php echo $out['apply_by']; ?></td>
                      
                        <td><?php echo $out['openings']; ?></td>
                        <td><?php echo $out['responsibility']; ?></td>
                        <td><?php echo $out['perks']; ?></td>
                        <td><?php echo $out['skills']; ?></td>
                        <td>
                            <?php
                           $data = explode (",", $out['questions']);
                           $n= count($data);
                           $questions="";
                           if($n>=1){
                               for($j=0;$j<$n;$j++){
                        ?>
                            <?php $questions .="Ques ".($j+1).".".$data[$j].",";?>
                           <?php  }echo $questions;} 
                           
                           ?>
                            
                        </td>
                        <td>
                            <?php echo $out['description']; ?>
                        </td>
                        <td><?php echo $out['owner']; ?></td>
                    </tr>
                    <?php $i++; }?>

                </tbody>
            </table>
        </div>
        <!------------------------------------------- User ------------------------------------------------------->
        <div class="tab-pane fade mt-2 ml-1 mr-1 table-responsive" id="nav-user" role="tabpanel"
            aria-labelledby="nav-user-tab">
            <table class="mr-auto ml-auto mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Approval status</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>password</th>
                        <th>is_employer</th>
                        <th>city1</th>
                        <th>city2</th>
                        <th>type</th>
                        <th>job_pre_1</th>
                        <th>job_pre_2</th>
                        <th>job_pre_3</th>
                        <th>city_pre_1</th>
                        <th>city_pre_2</th>
                        <th>city_pre_3</th>
                        <th>education</th>
                        <th>internships</th>
                        <th>trainings</th>
                        <th>projects</th>
                        <th>work_samples</th>
                        <th>skills</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php while($i2!=$count2){$out2= mysqli_fetch_array($res2)or die(mysqli_errno($con)); ?>
                    <tr id="<?php echo 'user_row'.$out2['id']; ?>">
                        <td><button href="" class="user_delete"  data-id="<?php echo $out2['id']; ?>"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                        <td><button href="" class="user_tick" data-id="<?php echo $out2['id']; ?>"><i class="far fa-check-circle text-success fa-2x"></i></button> <br><br>
                            <button href="" class="user_cross" data-id="<?php echo $out2['id']; ?>"><i class="far fa-times-circle text-danger fa-2x"></i></button></td>
                        <td id="<?php echo 'user_col'.$out2['id']; ?>"><?php echo $out2['approval_status']; ?></td>
                        <td><?php echo $out2['first_name']; ?></td>
                        <td><?php echo $out2['last_name']; ?></td>
                        <td><?php echo $out2['phone']; ?></td>
                        <td><?php echo $out2['email']; ?></td>
                        <td><?php echo $out2['password']; ?></td>
                        <td><?php  if($out2['is_employer']==0){echo "No";} else{echo "Yes";} ?></td>
                        <td><?php echo $out2['city1']; ?></td>
                        <td><?php echo $out2['city2']; ?></td>
                        <td><?php echo $out2['type']; ?></td>
                        <td><?php echo $out2['job_pre_1']; ?></td>
                        <td><?php echo $out2['job_pre_2']; ?></td>
                        <td><?php echo $out2['job_pre_3']; ?></td>
                        <td><?php echo $out2['city_pre_1']; ?></td>
                        <td><?php echo $out2['city_pre_2']; ?></td>
                        <td><?php echo $out2['city_pre_3']; ?></td>
                        <td><?php $data = explode ("@", $out2['education']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <p ><b><?php echo $sub_data[0]; ?></b></p>
                            <p >year of completion: <?php echo $sub_data[1]; ?></p>
                            <p >percentage: <?php echo $sub_data[2]; ?></p> 
                           <?php }}?></td>
                        <td><?php $data = explode ("@", $out2['internships']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <p><b><?php echo $sub_data[0]; ?></b></p>
                            <p>Job title: <?php echo $sub_data[1]; ?></p>
                            <p>Duration: <?php echo $sub_data[2]; ?></p> 
                 
                           <?php }}?></td>
                        <td> <?php $data = explode ("@", $out2['trainings']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <p><b><?php echo $sub_data[0]; ?></b></p>
                           
                            <p >Duration: <?php echo $sub_data[1]; ?></p> 
                 
                           <?php }}?></td>
                        <td><?php $data = explode ("@", $out2['projects']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode ("#", $data[$i]);
                            ?>
                             <p><b><?php echo $sub_data[0]; ?></b></p>
                           
                            <p >About: <?php echo $sub_data[1]; ?></p> 
                 
                           <?php }}?></td>
                        <td>          <?php $data = explode ("^", $out2['work_samples']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>
                             <p><b><?php echo $sub_data[0]; ?></b></p>
                           
                             <p ><b>GitHub profile : <a href="<?php echo $sub_data[0]; ?>"><?php echo $sub_data[0]; ?></a></b></p>
                            <p >Other portfolio : <a href="<?php echo $sub_data[1]; ?>"><?php echo $sub_data[1]; ?></a></p>
                 
                           <?php }}?></td>
                        <td>
                                                                 <?php $data = explode ("@", $out2['skills']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n-1;$i++){
                                   $sub_data = explode (",", $data[$i]);
                            ?>

                             <p><b><?php echo $sub_data[0]; ?></b></p>
                           
                            <p >Level: <?php echo $sub_data[1]; ?></p> 

  <?php }}?>
                      
                        </td>

                    </tr>
                      <?php $i2++;} ?>
                    
                </tbody>
            </table>
        </div>
        <!------------------------------------------- Status ------------------------------------------------------->
        <div class="tab-pane fade mt-2 ml-1 mr-1" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
            <table class="mr-auto ml-auto mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>company_id</th>
                        <th>applicant_id</th>
                        <th>answers</th>
                        <th>date</th>
                        <th>app_status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($i3!=$count3){$out3= mysqli_fetch_array($res3)or die(mysqli_errno($con)); ?>
                    <tr id="<?php echo 'application_row'.$out3['id']; ?>">
                        <td><button href="" class="application_delete"  data-id="<?php echo $out3['id']; ?>"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                        <td><?php echo $out3['company_id']; ?></td>
                        <td><?php echo $out3['applicant_id']; ?></td>
                        <td>
 <?php echo $out3['answers']; ?>
                        </td>
                        <td><?php echo $out3['date']; ?></td>
                        <td><?php echo $out3['app_status']; ?></td>

                    </tr>
                    
                    <?php $i3++;} ?>
                </tbody>
            </table>
        </div>
                <!------------------------------------------- cities ------------------------------------------------------->
        <div class="tab-pane fade mt-2 ml-1 mr-1" id="nav-city" role="tabpanel" aria-labelledby="nav-city-tab">
            <table class="mr-auto ml-auto mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>city_name</th>
                        <th>state_name</th>


                    </tr>
                </thead>
                <tbody id="city_table">
                    <tr id="add">
                        <td><button href="" class="city_add"  data-id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                        <td><input type="text" id="city_name" /> </td>
                        <td><input type="text" id="state_name" /> </td>
                    </tr>
                    <?php while($i4!=$count4){$out4= mysqli_fetch_array($res4)or die(mysqli_errno($con)); ?>
                    <tr id="<?php echo 'city_row'.$out4['city_id']; ?>">
                        <td><button href="" class="city_delete"  data-id="<?php echo $out4['city_id']; ?>"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                        <td><?php echo $out4['city_name']; ?></td>
                        <td><?php echo $out4['city_state']; ?></td>


                    </tr>
                    
                    <?php $i4++;} ?>
                </tbody>
            </table>
        </div>
                                <!------------------------------------------- categories ------------------------------------------------------->
        <div class="tab-pane fade mt-2 ml-1 mr-1" id="nav-category" role="tabpanel" aria-labelledby="nav-category-tab">
            <table class="mr-auto ml-auto mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>category</th>
                      


                    </tr>
                </thead>
                <tbody id="category_table">
                    <tr id="category_add">
                        <td><button href="" class="category_add"  data-id="category_add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                        <td><input type="text" id="category" /> </td>
                  
                    </tr>
                    <?php while($i5!=$count5){$out5= mysqli_fetch_array($res5)or die(mysqli_errno($con)); ?>
                    <tr id="<?php echo 'category_row'.$out5['category_id']; ?>">
                        <td><button href="" class="city_delete"  data-id="<?php echo $out5['category_id']; ?>"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                        <td><?php echo $out5['category']; ?></td>
                      


                    </tr>
                    
                    <?php $i5++;} ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
 <script>
 
$(document).ready(function(){
$(document).on('click', '.delete', function(){
var id = $(this).data('id');
  $.ajax({
   url:"delete_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { alert("deleted sucessfully");
       $("#row"+id).remove();
   }
  });

   });
   
$(document).on('click', '.tick', function(){
var id = $(this).data('id');
  $.ajax({
   url:"update_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { 
       $("#col"+id).html(data);
   }
  });

   });
   
$(document).on('click', '.cross', function(){
var id = $(this).data('id');
  $.ajax({
   url:"update_data.php",
   method:"POST",
   data:{id_cross:id},
   success:function(data)
   { 
       $("#col"+id).html(data);
   }
  });
     });
//-----------------------------------------
$(document).on('click', '.user_delete', function(){
var id = $(this).data('id');
  $.ajax({
   url:"delete_user_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { alert("deleted sucessfully");
       $("#user_row"+id).remove();
   }
  });

   });
   
$(document).on('click', '.user_tick', function(){
var id = $(this).data('id');
  $.ajax({
   url:"update_user_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { 
       $("#user_col"+id).html(data);
   }
  });

   });
   
$(document).on('click', '.user_cross', function(){
var id = $(this).data('id');
  $.ajax({
   url:"update_user_data.php",
   method:"POST",
   data:{id_cross:id},
   success:function(data)
   { 
       $("#user_col"+id).html(data);
   }
  });
     });
  
$(document).on('click', '.application_delete', function(){
var id = $(this).data('id');

  $.ajax({
   url:"delete_application_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { alert("deleted sucessfully");
       $("#application_row").remove();
   }
  });

   });
   

      $(document).on('click', '.city_delete', function(){
var id = $(this).data('id');

  $.ajax({
   url:"delete_city_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { alert("deleted sucessfully");
       $("#city_row"+id).remove();
   }
  });

   });
      $(document).on('click', '.city_add', function(){

                   var city_name=document.getElementById("city_name").value;
          var state_name=document.getElementById("state_name").value; 
             

  $.ajax({
   url:"add_city_data.php",
   method:"POST",
   data:{city_name:city_name,state_name:state_name},
   success:function(data)
   { alert("sucessfully added !"+data);
  
         var      markup = "<tr id=city_row"+data+">"+ '<td><button href="" class="city_delete"  data-id='+data+'><i class="fas fa-trash-alt fa-2x"></i></button></td>'+"<td>"+city_name+"</td><td>"+state_name+"</td></tr>"; 
           var     tableBody = $("#city_table"); 
                $("#add").remove();
                tableBody.prepend(markup);
                tableBody.prepend('<tr id="add">'+' <td><button href="" class="city_add"  data-id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>' +'<td><input type="text" id="city_name" /> </td>'
                        +' <td><input type="text" id="state_name" /> </td>');
   }
  });});
        $(document).on('click', '.category_delete', function(){
var id = $(this).data('id');

  $.ajax({
   url:"delete_category_data.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   { alert("deleted sucessfully");
       $("#category_row"+id).remove();
   }
  });

   });
      $(document).on('click', '.category_add', function(){

                   var category=document.getElementById("category").value;
    
             

  $.ajax({
   url:"add_category_data.php",
   method:"POST",
   data:{category:category},
   success:function(data)
   { alert("sucessfully added !");
  
         var      markup = "<tr id=category_row"+data+">"+ '<td><button href="" class="category_delete"  data-id='+data+'><i class="fas fa-trash-alt fa-2x"></i></button></td>'+"<td>"+category+"</td>"; 
           var     tableBody = $("#category_table"); 
                $("#category_add").remove();
                tableBody.prepend(markup);
                tableBody.prepend('<tr id="category_add">'+' <td><button href="" class="category_add"  data-id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>' +'<td><input type="text" id="category" /> </td>' );
   }
  });

   });
   
   
});
</script>
</html>
<?php } ?>