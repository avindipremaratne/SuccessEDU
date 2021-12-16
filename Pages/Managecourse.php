<?php session_start();?>
  <?php 
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {	position: absolute;
	left: 62px;
	top: 82px;
	width: 761px;
	height: 236px;
	z-index: 1;
}
	.TFtable{
		width:100%; 
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
#apDiv2 {
	position: absolute;
	left: 102px;
	top: 98px;
	width: 605px;
	height: 191px;
	z-index: 1;
}
</style>
<script type="text/javascript">

function stDetails(x)
{

//alert("Row index is: " + x.rowIndex);
//alert(document.getElementById('myTable').rows[x.rowIndex].cells[0].innerHTML);
 //$_SESSION["editUSR"]=(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);
 	var cvalue=document.getElementById('myTable').rows[x.rowIndex].cells[0].innerHTML;
	
	//alert(cvalue);
	
var expires=86400;
	
	var cname="uid";
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
 window.location.href = "updatedeletecourse.php";
 //alert(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);

}

</script>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">

<form id="form1" name="form1" method="post" action="updatedeletecourse.php">
<div id="apDiv2">
<?php 
//RESULT PAGE
$result=mysqli_query($con,"SELECT * FROM courses where Name='".$_POST["cmbcourse"]."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{	
	echo "<table class='TFtable' align='center' width=80%  cellpadding='5px' id='myTable'>";
	echo "<tr>";
	echo "<th align='center' id='reg' > Course_ID";
	echo "<th align='center'> Name";
	echo "<th align='center'> Modules";
	echo "<th align='center'> Index";	
	echo "<th align='center'> Modification";

	echo"</tr>";
while($row=mysqli_fetch_array($result))
{	
	echo "<tr onclick='stDetails(this)'>";
	
echo "<td >". $row["Course_ID"];
//echo "<td>".$_SESSION[$row["Registration_No"]] = $row["Registration_No"];
echo "<td>".$row["Name"];
echo "<td>".$row["Modules"];
echo "<td>".$row["B_Index"];

//echo "<td> <a href='editdelete.php'>Manage Students</a>";
echo "<td><input name='mngstd' type='button' value='Manage Course'/>";
	echo "</tr>";
}
	echo "</table>";
}
?>

</div>
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