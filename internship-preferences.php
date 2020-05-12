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
            include("connection.php");
            if(isset($_POST['city_pre_1'])){
   // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));

   


        $querry='update users set job_pre_1="'.$_POST['job_pre_1'].'" , job_pre_2="'.$_POST['job_pre_1'].'" , job_pre_3="'.$_POST['job_pre_3'].'" , city_pre_1="'.$_POST['city_pre_1'].'" , city_pre_2="'.$_POST['city_pre_2'].'" , city_pre_3="'.$_POST['city_pre_3'].'" ,type="'.$_POST['type'].'"    where email="'.$_SESSION['id'].'"';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        header('location: internships.php');}
   function load_cities()
      {
       include("connection.php");
        $opt='';
     //   $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
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
      { include("connection.php");
        $opt='';
       // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
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
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preference</title>
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
                    <div style="background-color: limegreen;" class="card-header">
                        Internship Preferences
                    </div>
                    <div class="card-body text-left">
                        <form method="post">
                        <h6>In which fields are you looking for Internship?</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">1</span>
                            </div>
                            <select name="job_pre_1" id="job_pre_1">
                                <option value="" selected disabled>Select your 1st preference</option>
                                <?php echo load_jobs(); ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">2</span>
                            </div>
                            <select name="job_pre_2" id="job_pre_2">
                                <option value="" selected disabled>Select your 2nd preference</option>
                                <?php echo load_jobs(); ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">3</span>
                            </div>
                            <select name="job_pre_3" id="job_pre_3">
                                <option value="" selected disabled>Select your 3rd preference</option>
                        <?php echo load_jobs(); ?>
                            </select>
                        </div>
                        <h6>What type of internships are you available for?</h6>
                        <input type="radio" name="type" value="full time" id=""><label for="">Full time Internship only</label><br>
                        <input type="radio" name="type" value="work from home,partime" id=""><label for="">Work from home/Part time(in your city)</label><br>
                        <input type="radio" name="type" value="full time,work from home,partime" id=""><label for="">Both</label><br>
                        <h6>In which cities would you like to do your internship?</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">1</span>
                            </div>
                            <select name="city_pre_1" id="city_pre_1">
                                <option value="" diabled selected>Select your 1st preference</option>
                                 <?php echo load_cities(); ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">2</span>
                            </div>
                            <select name="city_pre_2" id="city_pre_2" diabled selected>
                                <?php echo load_cities(); ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">3</span>
                            </div>
                            <select name="city_pre_3" id="city_pre_3" diabled selected>
                                <option value="" disabled selected>Select your 3rd preference</option>
                                  <?php echo load_cities(); ?>
                            </select>
                        </div>
                        <br>
                        <button type="submit"  class="btn btn-primary ml-auto">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>

<?php }} ?>