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
$_course=$_POST["txtcourse"];
mkdir("../Students/$_id");

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

?>
</body>
</html>