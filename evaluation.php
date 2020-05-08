<?php
$company_id=$_GET['company_id'];
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
        $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
        $querry='select * from data where id='.$company_id.'';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIESTASHALA resume</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>
           <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #292b2c;">
        <a class="navbar-brand" style="font-size:x-large;" href="#"><i class="fab fa-invision"></i> INIESTASHALA</a>
    </nav>
    <!-- navbar end -->
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" d="cb">
                        <h5 class="card-title">Assesment Questions</h5>
                        <p class="card-text"><b>Why should you be hired for this role?</b></p>
                        <textarea class="form-control" name="" id="" cols="50" rows="5"></textarea><br>
                        <p class="card-text"><b>Are you available next <?php echo $out['duration']." months"; ?></b></p>
                        <textarea class="form-control" name="" id="" cols="50" rows="5"></textarea><br>
                        <?php
                           $data = explode (",", $out['questions']);
                           $n= count($data);
                           
                           if($n>1){
                               for($i=0;$i<$n;$i++){
                        ?>
                         <p class="card-text"><b><?php echo $data[$i]; ?></b></p>
                         <textarea class="form-control" name="" id="" cols="50" rows="5"></textarea><br>
                           <?php }}?>
                        <div class="text-right">
                            <button  class="btn btn-primary" onclick="submit()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <script>
function submit()

{
    $(document).ready(function(){
var answers="";
$( "textarea" ).each(function( index ) {
    if(answers!==""){
  answers = answers +"," +$( this ).val();}
  else
  {answers = answers+$( this ).val();}
});
        $.ajax({
            
            url:"apply_internship.php",
            method:"POST",
            data:{answers:answers,company_id:<?php echo $company_id; ?>},
            success:function(data)
            { alert(data);
                
                 window.location = "internship_status.php";
                  }
        });
 //   alert(ta);
     });
     }
 </script>

</html>
<?php }} ?>
