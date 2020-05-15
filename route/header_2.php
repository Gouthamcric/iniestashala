    <nav class="navbar navbar-expand-lg" style="background-image: -webkit-linear-gradient(155deg,rgb(104, 184, 177),rgb(230, 229, 224));">
        <a class="navbar-brand" style="font-size:x-large;" href="index.php"><img src="images/INTERNSHIPAROMA-logo.png" style="width: 80px; height: 36px;" alt=""></a>
        <button class="navbar-toggler bg-dark text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span style="color: aliceblue;" class="navbar-toggler-icon text-light"></span> -->
            &equiv;
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <button style="margin-top: 2%;" onclick="window.location.href='login.html'"
                        class="btn btn-dark right-margin">Login</button>
                </li>
                <li class="nav-item dropdown">
                    <!-- <button style="margin-top: 2%;" class="btn btn-secondary ">Register</button> -->
                    <div style="margin-top: 2%;" class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="registerStudent.php">As a Student</a>
                            <a class="dropdown-item" href="registerEmployer.php">As an Employer </a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>