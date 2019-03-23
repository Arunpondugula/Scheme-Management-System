<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD'] == "POST")
{

			$f=$_POST[ 'name'];
			 $email=$_POST['email'];
			$comment=$_POST['comment'];
			
			  
			 
			 
			$sql = "INSERT INTO contact VALUES ('.$f.','.$email.','.$comment.')";
			  
			
	if (mysqli_query($conn, $sql) or mysqli_error()) 
	{
		 
			
			 echo"comment received";
			 echo"'$f','$email','$comment'";
			exit();
		}
    
	else 
	{
  			header("Location: failure.html");
			exit();
	}
}

mysqli_close($conn);
?>