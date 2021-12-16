<?php 
$con=mysqli_connect("localhost", "root","","success_edu");
if(mysqli_connect_errno($con))
{
		echo "Failed to conect MYSQL:".mysqli_connect_error();
		
	}
	else
	{
			//echo "Database Connected..!!";
	}
?>