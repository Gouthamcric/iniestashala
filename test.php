<?php 

/*	if(isset($_POST['submit']))
	{
		session_start();
		
		// Include config file
		$servername = "localhost";
		$username = "id9726315_wp_505fb1e6e052602351622245fd40f636";
		$password = "raghavendra";
		$dbname = "id9726315_wp_505fb1e6e052602351622245fd40f636";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$mai=$_POST['email'];
		$que=$_POST['query'];
		$num=$_POST['no'];
		$logid=$_POST['log'];
		$pass='samarthjain16899';
*/		

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 $mail = new PHPMailer;
 $mail->IsSMTP();       
 $mail->Host = 'tls://smtp.gmail.com:587';   
 $mail->Port = 587;       
 $mail->SMTPAuth = true;      
 $mail->Username = 'your mail id';    
 $mail->Password = 'your password';     
 $mail->SMTPSecure = 'tls';      
 $mail->From = 'goutham.n@vitap.ac.in';   
 $mail->FromName = 'Goutham Natarajan';   
 $mail->AddAddress("gouthamnatarajancric@gmail.com", 'Goutham');  
 $mail->WordWrap = 50;      
 $mail->IsHTML(true);              
 $mail->Subject = 'Subject';   
 $mail->Body = 'Your message goes here.';
 if($mail->Send())        
 {
     
 
echo "ok";
 
 }
 else{echo 'Mailer Error : '.$mail->ErrorInfo;
 }


	
		
			
	/*	$sql1 = "CREATE TABLE IF NOT EXISTS Query_Details (QUERY_NO INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, LOGIN_ID VARCHAR(1000) NOT NULL, PHONE_NUMBER VARCHAR(15) NOT NULL, MAIL_ID VARCHAR(100) NOT NULL, USER_QUERY VARCHAR(1000000) NOT NULL)";
		
		if ($conn->query($sql1) === TRUE)
		{
			echo "<script>
				alert('Table Updated.');
			</script>";
		}
		else 
		{
			echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
		}
		
		$sql = "INSERT INTO Query_Details set LOGIN_ID = '$logid' , PHONE_NUMBER = '$num' , MAIL_ID = '$mai' , USER_QUERY = '$que' ";
		
		if (mysqli_query($conn, $sql)) 
		{
			echo "<script>
			alert('New record created successfully');
			window.location.href='contactexaminer.html';
			</script>";
			
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
		
	} */
?>