<!doctype html>
<?php
if(isset($_POST['email'])){
    session_start();
   // $con= mysqli_connect("localhost", "root", "", "db")or die(mysqli_errno($con));
include("connection.php");
   
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $querry="select * from users";
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        $count= mysqli_num_rows($res);
      $i=0;
        if($count!=0){
        while($i<$count)
        {   $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
       //checks if user is already registered 
            if($email==$out['email'])
        {       header('location: registerEmployer.php?msg=email already exist'); 
       
        }
     $i++;
        }}
        $querry='insert into users(first_name,last_name,phone,email,password,is_employer) values("'.$first_name.'","'.$last_name.'","'.$phone.'","'.$email.'","'.$password.'",False)';
        $res= mysqli_query($con, $querry)or die(mysqli_errno($con));
        header('location: login.php?msg=successfully signed up');}
        
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Register as Employer</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" method="post">
        <!-- <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
        <i class="fab fa-invision fa-3x"></i>
        <h1 class="h3 mb-3 font-weight-normal">Please Register</h1>
        <input type="text"  class="form-control" placeholder="First Name" required autofocus id="first_name" name="first_name">
        <input type="test"  class="form-control" placeholder="Last Name" required id="last_name" name="last_name">
        <input type="tel" class="form-control" placeholder="10 digit Phone number" required id="phone" name="phone">
        <input type="email" class="form-control" placeholder="Official Email id" required id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="the username, the @ symbol, and the user's domain name">
        <input type="password" class="form-control" placeholder="Password" required id="password" name="password" pattern=".{6,}" title="password should be minimum of 6 characters">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a href="login.php">Already have an account ? Log in ></a>
           <?php if(isset($_GET['msg'])){ echo '<br><p style="color:red">*'.$_GET['msg'].'*</p>';} ?>
        <p class="mt-5 mb-3 text-muted">&copy; Iniestashala 2020</p>
    </form>
</body>

</html>