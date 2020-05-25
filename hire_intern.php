<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INTERNSHIPAROMA</title>

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
  <style>
    body {
      background-image: -webkit-linear-gradient(65deg, rgb(131, 147, 148), white);
    }
    .header {
      border-radius: 60px;
    }
    .row {
      margin: 0;
    }

    img {
      width: 240px;
      height: 240px;
    }

    .card {
      height: 100%;
      box-shadow: 1px 1px 8px 1px grey;
    }
  </style>

</head>

<body>
  <!-- navbar -->
 <?php if(!isset($_SESSION['id'])){include('header_2.php');} else {include("header.php");} ?>
  <!-- navbar end -->

  <!-- body -->

  <div style="margin-top: 8%;">
    <h1 class="text-center"><u class="header text-light px-5 py-2 bg-secondary">Hire Interns in 3 simple steps</u></h1>
    <br>
    <br>
    <div class="row justify-content-md-center">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="images/register.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1. Register</h5>
            <p class="card-text">Get started by creating your account.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="images/post.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">2. Post</h5>
            <p class="card-text">Post internships for any profile and location.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="images/hire.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">3. Hire</h5>
            <p class="card-text">Screen and hire at your fingertips.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="text-center m-0">
    <a href="index.php" class="btn btn-danger mb-4">Register Now!</a>
  </div>
</body>

</html>