<?php 
include ("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 19px;
	top: 150px;
	width: 612px;
	height: 224px;
	z-index: 1;
}
.TFtable{
		width:20%; 
		border-collapse:collapse; 
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
		font-family:"Microsoft YaHei UI"; font-size:13px;
	}
	
	.TFtable tr{
		background: #b8d1f3;
	}
	
	.TFtable tr:nth-child(odd){ 
		background: #28a428;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		
	}

	.TFtable tr:nth-child(even){
		background:  #98e698;
	}
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<?php 
$result=mysqli_query($con,"SELECT * FROM courses WHERE Name='".$_POST["cmbcourse"]."'");
if(!$result)
{
	echo "Database query execution fail";
	}
	else
	{		echo "<table class='TFtable' border='1' align='center' cellpadding='5px' width=100% bordercolor='#FFFFFF' id='myTable'>";
			
			echo "<tr bgcolor='#00CCFF'>";
			echo "<th align='center'> Course ID";
			echo "<th align='center'> Name";
			echo "<th align='center'> Modules";
			
			echo "</tr>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr onclick='courseDetails(this);'>";
				echo "<td>".$row["Course_ID"]."</td>";
				echo "<td>".$row["Name"]."<br>";
				echo "<td>".$row["Modules"]."<br>";				
				
	echo "</tr>";
}
	echo "</table>";
}

?>
<div id="apDiv1"></div>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>