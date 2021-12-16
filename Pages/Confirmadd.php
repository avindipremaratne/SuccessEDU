 <?php 
include("dbconnect.php");
?>

<?php 
$_id=$_POST["txtid"];
$_name=$_POST["txtname"];
$_gender=$_POST["chkgender"];
$_dob=$_POST["txtdob"];
$_address=$_POST["txtaddress"];
$_nic=$_POST["txtnic"];
$_course=$_POST["cmbcourse"];
$_batch=$_POST["txtbatch"];
$_batchindex=$_POST["txtbatchindex"];
$_mobile=$_POST["txtmobile"];
$_home=$_POST["txthome"];
$_email=$_POST["txtemail"];
$_username=$_POST["txtusername"];
$_password=trim($_POST["txtpassword"]);
 
$insertSQL="INSERT INTO students VALUES('".$_id."','".$_name."','".$_gender."','".$_dob."','".$_address."','".$_nic."' , '" .$_course. "', '" .$_batch. "' , '".$_batchindex."' , '".$_mobile. "' , '".$_home. "' , '".$_email.  "','".$_username. "','".MD5($_password). "')";

if(!mysqli_query($con,$insertSQL))
{
	die("Error in adding new student".mysqli_error($con));
}
else
{
echo "One Student record Added.";
mkdir("../Students/".$_nic);
$TXTcourseSQL="SELECT Modules FROM Courses where Name='".$_course."'";

$modfound=mysqli_query($con,$TXTcourseSQL);
if(!$modfound)
{
	echo "Database query execution fail";
}
else
{
    	while($row=mysqli_fetch_array($modfound))
		{	
		$mycourse = $row["Modules"];
		$mycourseArray = explode(',', $mycourse);
			foreach ($mycourseArray as $module) 
			{
    			mkdir("../Students/".$_nic."/".$module);
			}		
		}
}
}


?>
