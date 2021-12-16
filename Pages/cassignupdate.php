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
$_id = $_SESSION["id"];
$_course = $_SESSION["course"];
$_module = $_SESSION["module"];
$_batch = $_SESSION["batch"];
$_assignmentname = $_SESSION["assignmentname"];
$_dateofissue = $_SESSION["dateofissue"];
$_dateofsubmit=$_SESSION["dateofsubmit"];

$updateSQL = "UPDATE assignments SET Course = '$_course', Module = '$_module', Batch_Index = '$_batch', Assignment_Name = '$_assignmentname', Date_of_issue = '$_dateofissue', Date_of_submit = '$_dateofsubmit' WHERE Assignment_No = '$_id'";

if(!mysqli_query($con,$updateSQL))
{
	die("Assignment Updating Error".mysqli_error($con));
}
else
{
echo "One Assignment Record Updated.";
}
?>

</body>
</html>