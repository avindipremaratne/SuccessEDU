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

$deleteSQL = "DELETE FROM batch WHERE Batch_Index= '$_batchindex'";
if(!mysqli_query($con,$deleteSQL))
{
	die("Batch Deleting Error".mysqli_error($con));
}
else
{
echo "One Batch Deleted Successfully.";
}
?>

</body>
</html>