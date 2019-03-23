 <?php
 
 include 'connect.php';
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
	$user=$_POST['id'];
	$pswd=$_POST['pswd'];
	echo"'$user','$pswd'";
	$status="";

	$sql = 'SELECT * FROM login ';
	$result = mysqli_query($conn, $sql);

	 
		while($row = mysqli_fetch_array($result)) {
			if($user==$row['id']&&$pswd==$row['dob'])
			{
				    
				   $status="valid password!!";
				    
						 echo"'$status'";
						  
				  
					exit();
			}
			else
			{
				$status="Invalid password!!";
			}
		}
	 
 }
mysqli_close($conn);
?> 
<html>
	<body>
		
	</body>
</html>
