<?php


  
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
            if(isset($_POST['city1'])){
   // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));

   include("connection.php");

        $city1=$_POST['city1'];
        $city2=$_POST['city2'];
        $querry='update users set city1="'.$city1.'" ,city2="'.$city2.'" where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
       header('location: internship-preferences.php');
       }
        function first_name()
        {
include("connection.php");       
// $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from users where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        return $out["first_name"];
        }
          function last_name()
        {
include("connection.php");
//                $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from users where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        return $out["last_name"];
        }
          function mobile_no()
        {
        include("connection.php");
        //$con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from users where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        return $out["phone"];
        }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIESTASHALA</title>

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

    <style>
        .round-corners {
            border-radius: 2px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" style="font-size:x-large;" href="index.html"><i class="fab fa-invision"></i> INIESTASHALA</a>
    </nav>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div style="background-color: royalblue;" class="card-header">
                        Personal Details
                    </div>
                    <div class="card-body text-left">
                        <form method="post">
                        <h6>Name*</h6>
                        <input class="round-corners" type="text" placeholder="FirstName" required id="first_name" disabled value="<?php echo(first_name()); ?>">&nbsp;&nbsp;
                        <input class="round-corners" type="text" placeholder="LastName" id="last_name" disabled value="<?php echo(last_name());?>"><br><br>
                        <h6>Mobile Number*</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                            </div>
                            <input type="text" class="form-control" placeholder="10 digit Mobile Number"
                                aria-label="Username" aria-describedby="basic-addon1" id="mobile_no" name="mobile_no" disabled value="<?php echo(mobile_no());?>">
                        </div>
                        <h6>Current City*</h6>
                        <input type="text" class="form-control" placeholder="City where you currently live" id="city1" name="city1"><br>
                        <h6>Add 2nd city</h6>
                        <p>If you study in one city but are from other city, fill this to be considered for opportunity
                            in both.</p>
                        <input type="text" class="form-control" placeholder="2nd city name here" id="city2" name="city2"><br>
                        <button type="submit"  class="btn btn-primary ml-auto" id="submit">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script>
     $(document).ready(function(){

         //$('#first_name').val("goutham");
     });
     </script>
</body>

</html>
<?php }} ?>