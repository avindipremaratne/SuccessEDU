<?php 
include("dbconnect.php");
?>
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
$_id=$_SESSION["id"];

$deleteSQL = "DELETE FROM students WHERE Registration_No= '$_id'";
if(!mysqli_query($con,$deleteSQL))
{
	die("Student Deleting Error".mysqli_error($con));
}
else
{
echo "One Student Deleted Successfully.";
}
?>
</body>
</html>