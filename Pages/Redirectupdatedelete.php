<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if(isset($_POST["btnsbutton"]))
	{
		foreach($_POST['btnsbutton'] as $key => $value)
		{
			if($key==1)
			{
				$_SESSION["id"]=$_POST["txtid"];
				$_SESSION["name"]=$_POST["txtname"];
				$_SESSION["gender"]=$_POST["txtgender"];
				$_SESSION["dob"]=$_POST["txtdob"];
				$_SESSION["address"]=$_POST["txtaddress"];
				$_SESSION["nicno"]=$_POST["txtnicno"];
				$_SESSION["course"]=$_POST["txtcourse"];
				$_SESSION["batch"]=$_POST["txtbatch"];
				$_SESSION["batchindex"]=$_POST["txtbatchindex"];
				$_SESSION["mobile"]=$_POST["txtmobile"];
				$_SESSION["home"]=$_POST["txthome"];
				$_SESSION["email"]=$_POST["txtemail"];
				$_SESSION["username"]=$_POST["txtusername"];
				$_SESSION["password"]=$_POST["txtpassword"];
				header("Location:Confirmupdate.php");
				}
				elseif($key==2)
				{
						$_SESSION["id"]=$_POST["txtid"];
						header("Location:Confirmdelete.php");
					}
						elseif($key==3)
				{
						$_SESSION["id"]=$_POST["txtano"];
						$_SESSION["course"]=$_POST["txtcourse"];
						$_SESSION["module"]=$_POST["txtmodule"];
						$_SESSION["batch"]=$_POST["cmbbatch"];
						$_SESSION["assignmentname"]=$_POST["txtaname"];
						$_SESSION["dateofissue"]=$_POST["txtdateofissue"];
						$_SESSION["dateofsubmit"]=$_POST["txtdateofsubmit"];
						
						header("Location:cassignupdate.php");
					}	
					
					elseif($key==4)
				{
						$_SESSION["id"]=$_POST["txtano"];					
						
						header("Location:cassigndelete.php");
					}						
			}
	}
?>
</body>
</html>