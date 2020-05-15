<!DOCTYPE html>
<?php
include("connection.php");
//$company_id='2';
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
    //    $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        
        $querry2='select * from application where applicant_id="'.$_SESSION['id'].'"';
        $res2= mysqli_query($con, $querry2)or die(mysqli_errno($con));
        $count2= mysqli_num_rows($res2);
        
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>internshiparoma|status</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>
    <style>
        #opacity {
            opacity: 0.6;
            border-radius: 20px 20px 0 0;
            padding: 0.5% 0;
        }
    </style>
</head>

<body>

    <!-- navbar -->
<?php include("header.php"); ?>
    <!-- navbar end -->
    <br>

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div id="opacity" class="bg-warning text-dark border text-center">
                    <h3>Applications</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Company</th>
                        <th scope="col">Application Status</th>
                        <th scope="col">No. of Applicants</th>
                      </tr>
                    </thead>
                    <tbody>
     <?php   $i=0;
        while($i!=$count2){ ?>
                     <?php $out2= mysqli_fetch_array($res2);
                     $querry='select * from data where id='.(int)$out2['company_id'].'';
                     $res= mysqli_query($con, $querry);
                     $out= mysqli_fetch_array($res);
                     $querry3='select * from application where company_id="'.$out['id'].'"';
                     $res3= mysqli_query($con, $querry3);
                     $count3= mysqli_num_rows($res3);
                     ?>
                        <tr>
                        <th scope="row"><?php echo($out2['date']); ?></th>
                        <td><?php echo($out['job']); ?></td>
                        <td><?php echo($out['company_name']); ?></td>
                        <td><?php echo($out2['app_status']); ?></td>
                        <td><?php echo($count3); ?></td>
                      </tr>
        <?php $i++;}?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>
<?php }}?>