<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="navbar.css">
    </head>
    <body>
        <div class="head">
            <a class="brand" style="font-size:x-large;" href="#"><i class="fab">in</i> INIESTASHALA</a>

            <div class="menu">
            
                <div class="imgwrap"><img style="width: 40px; height: 40px;" src="login.jpeg"></div>
                <div class="pop hidden">
                    <li class="item i1"><a class='a'><?php echo $_SESSION['username']; ?></a>
                        <a href="" class='a'><?php echo $_SESSION['id']; ?></a>
                    </li>
                    <li class="item i2"><a href="internship_status.php" class='a'>My application</a></li>
                    <li class="item i3"><a href="resume.php" class='a'>Edit Resume</a></li>
                    <li class="item i4"><a href="internship-preferences.php" class='a'>Edit prefrences</a></li>
                    <li class="item i4"><a href="internships.php" class='a'>Find Internship</a></li>
                    <li class="item i7"><a >More&nbsp;&nbsp;&nbsp; <img src="arrow.jpeg"></a>
                        <li class="sitem si1 hide"> <a>Manage Accounts &nbsp;&nbsp;&nbsp; <img src="arrow.jpeg"></a>
                        <li class="ssitem ssi1 hide"><a href="change_password.php" class='a'>Change Password</a></li>
                        <li class="ssitem ssi2 hide"><a href="change_email.php" class='a'>Change Email</a></li>
                        <li class="ssitem ssi3 hide"><a href="delete_account.php" class='a'>Delete My Account</a></li>
                        </li>
                        <li class="sitem si2 hide"> <a href="logout.php">Logout</a></li>
                    </li>
    
                </div>
            </div>

        </div>
        <script>
            var ma=document.querySelector(".si1");
            var ssitem=document.querySelectorAll(".ssitem");
            var sitem=document.querySelectorAll(".sitem");
            ma.addEventListener('click',function(){
                for(var i=0;i<ssitem.length;i++){
                    ssitem[i].classList.toggle('hide');
                }
            });
            var more=document.querySelector('.i7');
            more.addEventListener('click',function(){
                for(var i=0;i<sitem.length;i++){
                    sitem[i].classList.toggle('hide');
                }
                for(var i=0;i<ssitem.length;i++){
                    ssitem[i].classList.add('hide');
                }
            });
            var imgwrap=document.querySelector('.imgwrap');
            imgwrap.addEventListener('click',function(){
                document.querySelector('.pop').classList.toggle('hidden');
            });
        </script>
    </body>
</html>