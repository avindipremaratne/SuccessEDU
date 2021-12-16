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
$_gender=$_POST["chkgender"];
$_dob=$_POST["txtdob"];
$_address=$_POST["txtaddress"];
$_nic=$_POST["txtnic"];
$_course=$_POST["cmbcourse"];
$_batch=$_POST["txtbatch"];
$_batchcode=$_POST["txtbatchcode"];
$_mobile=$_POST["txtmobile"];
$_home=$_POST["txthome"];
$_email=$_POST["txtemail"];
 
$insertSQL="INSERT INTO students VALUES('".$_id."','".$_name."','".$_gender."','".$_dob."','".$_address."','".$_nic."' , '" .$_course. "', '" .$_batch. "' , '".$_batchcode."' , '".$_mobile. "' , '".$_home. "' , '".$_email. "')";

if(!mysqli_query($con,$insertSQL))
{
	die("User Adding Error".mysqli_error($con));
}
else
{
echo "One Student record Added.";
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
    			mkdir("../Students/$_id/".$module."");
			}

		
		}
}
}


?>
?>
</body>
</html>