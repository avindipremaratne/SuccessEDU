<?php 
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
$_modules=$_POST["txtmodules"];
$_index=$_POST["txtindex"];

$insertSQL="INSERT INTO Courses VALUES('".$_id."','".$_name."','".$_modules."','".$_index. "')";

if(!mysqli_query($con,$insertSQL))
{
	die("Course Adding Error".mysqli_error($con));
}
else
{
echo "One Course record Added.";		
}
?>
</body>
</html>