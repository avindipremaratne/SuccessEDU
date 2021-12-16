<?php 
include("dbconnect.php");
?>
<?php 
session_start();	
?>
<?php 
$_id=$_SESSION["id"];
$_name=$_SESSION["name"];
$_modules=$_SESSION["modules"];
$_index=$_SESSION["index"];

$updateSQL = $updateSQL = "UPDATE courses SET Name = '$_name', Modules = '$_modules', B_Index = '$_index' WHERE Course_ID = '$_id'";

if(!mysqli_query($con,$updateSQL))
{
	die("Course Updating Error".mysqli_error($con));
}
else
{
echo "One Course Record Updated.";
}
?>
