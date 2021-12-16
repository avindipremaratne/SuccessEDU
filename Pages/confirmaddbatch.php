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
$_batchindex=$_POST["txtbatchindex"];
$_name=$_POST["lstCourse"];

$insertSQL="INSERT INTO batch VALUES('".$_batchindex."','".$_name. "')";

if(!mysqli_query($con,$insertSQL))
{
	die("Batch Adding Error".mysqli_error($con));
}
else
{
echo "One Batch record Added.";		

mkdir("../Batch/".$_batchindex);
 $selectmod="SELECT Modules FROM courses where Name='".$_name."'";			
$result=mysqli_query($con,$selectmod);
if(!$result)
{
	echo "Database query execution fail";
}
else
{
    	while($row=mysqli_fetch_array($result))
		{	
		$mycourse = $row["Modules"];
		$mycourseArray = explode(',', $mycourse);
			foreach ($mycourseArray as $module) 
			{
    			mkdir("../Batch/".$_batchindex."/".$module);
			}		
		}
}



	

}
?>
</body>
</html>