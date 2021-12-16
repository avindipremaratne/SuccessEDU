<?php 

include ("dbconnect.php");

?>
<?php 
session_start();	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 149px;
	top: 78px;
	width: 789px;
	height: 192px;
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
 window.location.href = "Assignmentbrowse.php";
 //alert(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);
 



}

</script>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">

<form id="form1" name="form1" method="post" action="Assignmentbrowse.php">
<div id="apDiv1">
<?php 

//RESULT PAGE


$result=mysqli_query($con,"SELECT * FROM assignments where Batch_Index='".$_POST["cmbcourse"]."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{
	
	echo "<table class='TFtable' align='center' width=20%  cellpadding='5px' id='myTable'>";
	echo "<tr>";
	echo "<th align='center' id='reg' > Assignment No";
	echo "<th align='center'> Course";
	echo "<th align='center'> Module";
	echo "<th align='center'> Batch";
	echo "<th align='center'> Assignment Name";
	echo "<th align='center'> Date of Issue";
	echo "<th align='center'> Date of submit";	
	echo "<th align='center'> Modification";

	echo"</tr>";
while($row=mysqli_fetch_array($result))
{	
echo "<tr onclick='stDetails(this)'>";
	
echo "<td >". $row["Assignment_No"];
echo "<td>".$row["Course"];
echo "<td>".$row["Module"];
echo "<td>".$row["Batch_Index"];
echo "<td>".$row["Assignment_Name"];
echo "<td>".$row["Date_of_issue"];
echo "<td>".$row["Date_of_submit"];
echo "<td> <a href='Assignmentbrowse.php'>Submit</a>";

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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>