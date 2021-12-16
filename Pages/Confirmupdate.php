<?php 
include("dbconnect.php");
?>
<?php 
session_start();	
?>
<?php 
$_id=$_SESSION["id"];
$_name=$_SESSION["name"];
$_gender=$_SESSION["gender"];
$_dob=$_SESSION["dob"];
$_address=$_SESSION["address"];
$_nic=$_SESSION["nicno"];
$_course=$_SESSION["course"];
$_batch=$_SESSION["batch"];
$_batchindex=$_SESSION["batchindex"];
$_mobile=$_SESSION["mobile"];
$_home=$_SESSION["home"];
$_email=$_SESSION["email"];
$_username=$_SESSION["username"];
$_password=$_SESSION["password"];

$updateSQL = "UPDATE students SET Name = '$_name', Gender = '$_gender', Date_of_birth = '$_dob', Address = '$_address', NIC_No = '$_nic', Course = '$_course', Batch = '$_batch', Batch_Index = '$_batchindex', Mobile_No = '$_mobile', Home_No = '$_home', Email = '$_email', Username = '$_username', Password = '$_password' WHERE Registration_No = '$_id'";

if(!mysqli_query($con,$updateSQL))
{
	die("User Updating Error".mysqli_error($con));
}
else
{
echo "One Student Record Updated.";
}
?>
