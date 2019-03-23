<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD'] == "POST")
{
			$id=$_POST['id'];
			$f=$_POST[ 'name'];
			$dob=$_POST['dob'];
			 $email=$_POST['email'];
			 $proof=$_POST['proof'];
			$comment=$_POST['schemeid'];
			
			   echo"'$id','$f','$dob.','$email','$proof','$comment'";
			 
			 $sql0="SELECT * FROM register";
			 $result=mysqli_query($conn, $sql0);
			 while($row = mysqli_fetch_array($result)) {
			if($user!=$row['id'] )
			{
				$sql = "INSERT INTO register VALUES ('$id','$f','$dob','$proof','$email','$comment')";
				$sql2 = "INSERT INTO login VALUES ('$id', '$dob', '$comment')";
			 
			  
			
				if (mysqli_query($conn, $sql) or mysqli_error()) 
				{
					if (mysqli_query($conn, $sql2) or mysqli_error()) 
					{
						 
							header("Location: success.html");
							 
							  
							exit();
						 
					}
				}
				else 
				{
						header("Location: failure.html");
						exit();

				}
			 }
			 
}
}
mysqli_close($conn);
?>