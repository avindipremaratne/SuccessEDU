<?php
 include("dbconnect.php" );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$_assignmentno=$_POST["txtano"];
$_course=$_POST["txtcourse"];
$_module=$_POST["txtmodule"];
$_batch=$_POST["txtbatch"];
$_name=$_POST["txtaname"];
$_dateofissue=$_POST["txtdateissue"];
$_dateofsubmit=$_POST["txtdatesubmit"];
$_stid=$_POST["txtstid"];
$_stname=$_POST["txtstname"];

$target_dir = "../Assignments/";  
$target =$target_dir . basename($_FILES['stassign']['name']) ;  
  $insertSQL="INSERT INTO assignments_submit VALUES('".$_assignmentno. "','".$_course. "','".$_module."','".$_batch."','".$_name."','".$_dateofissue."','".$_dateofsubmit. "','" .$target. "','".$_stid. "','".$_stname. "')";

if(!mysqli_query($con,$insertSQL))
{
	die("User Adding Error".mysqli_error($con));
}
else
{
echo "One Student record Added.";
}
echo $target."<br />";

echo ($_FILES['stassign']['name']) ."<br />";

$ok=1;  
if(move_uploaded_file($_FILES['stassign']['tmp_name'], $target))
{ 
echo "The file ". basename($_FILES['stassign']['name']). " has been uploaded"; 

rename($target,$target_dir.	$_name.$_POST["txtstid"]."-".$_POST['txtmodule'].".docx");


//rename("../Batch/".$_batch.basename( $_FILES['assignment']['name']), "../Batch/".$_batch.$_POST['cmbbatch']."_".$_POST['txtmodule'].".docx");
}  
else { 
echo "Sorry, there was a problem uploading your file."; 
} 

?>
</body>
</html>