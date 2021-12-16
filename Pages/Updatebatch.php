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
$_batchindex=$_SESSION["batchindex"];
$_name=$_SESSION["name"];

$updateSQL =  "UPDATE batch SET Name = '$_name' WHERE Batch_Index = '$_batchindex'";


if(!mysqli_query($con,$updateSQL))
{
	die("Batch Updating Error".mysqli_error($con));
}
else
{
echo "One Batch Record Updated.";
}
?>
</body>
</html>