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
$_course=$_POST["cmbcourse"];
$_module=$_POST["cmbmodule"];
$_batch=$_POST["cmbbatch"];
$_name=$_POST["txtaname"];
$_dateofissue=$_POST["txtdateissue"];
$_dateofsubmit=$_POST["txtdatesubmit"];

$target_dir = "../Batch/".$_batch."/".$_module."/";  
$target =$target_dir . basename( $_FILES['assignment']['name']) ;  

  $insertSQL="INSERT INTO assignments VALUES('".$_assignmentno. "','".$_course. "','".$_module."','".$_batch."','".$_name."','".$_dateofissue."','".$_dateofsubmit. "','".$target. "')";

if(!mysqli_query($con,$insertSQL))
{
	die("Assignment Uploading Error".mysqli_error($con));
}
else
{
echo "One Assignment Added.";
}
echo $target."<br />";

echo ($_FILES['assignment']['name'])."<br />";

echo $target."<br />";

$ok=1;  
if(move_uploaded_file($_FILES['assignment']['tmp_name'], $target))
{ 
echo "The file ". basename( $_FILES['assignment']['name']). " has been uploaded"; 

rename($target,$target_dir.	$_name.".docx");
}  
else { 
echo "Sorry, there was a problem uploading your file."; 
} 
?>
</body>
</html>