<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 27px;
	top: 56px;
	width: 630px;
	height: 150px;
	z-index: 1;
}
.TFtable{
	border-collapse:collapse; 
	}
	.TFtable td{ 
		border:#4e95f4 1px solid;
		padding:4px;
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
 window.location.href = "editdelete.php";
 //alert(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);
 



}

</script>

</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">

<form id="form1" name="form1" method="post" action="editdelete.php">
 <div id="apDiv1">
  <?php 
include("dbconnect.php");
?>

<?php 

//RESULT PAGE


$result=mysqli_query($con,"SELECT * FROM students where Batch_Index='".$_POST["cmbcourse"]."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{
	
	echo "<table class='TFtable' align='center' width=100% id='myTable'>";
	echo "<tr>";
	echo "<th align='center' id='reg' > Registration No";
	echo "<th align='center'> Student Name";
	echo "<th align='center'> Gender";
	echo "<th align='center'> Date of Birth";
	echo "<th align='center'> Address";
	echo "<th align='center'> NIC No";
	echo "<th align='center'> Course";
	echo "<th align='center'> Batch";
	echo "<th align='center'> Batch Code";
	echo "<th align='center'> Mobile No";
	echo "<th align='center'> Home No";
	echo "<th align='center'> Email";
	echo "<th align='center'> Username";
	echo "<th align='center'> Password";
	echo "<th align='center'> Modification";

	echo"</tr>";
while($row=mysqli_fetch_array($result))
{	
	echo "<tr onclick='stDetails(this)'>";
	
echo "<td >". $row["Registration_No"];
//echo "<td>".$_SESSION[$row["Registration_No"]] = $row["Registration_No"];
echo "<td>".$row["Name"];
echo "<td>".$row["Gender"];
echo "<td>".$row["Date_of_birth"];
echo "<td>".$row["Address"];
echo "<td>".$row["NIC_No"];
echo "<td>".$row["Course"];
echo "<td>".$row["Batch"];
echo "<td>".$row["Batch_Index"];
echo "<td>".$row["Mobile_No"];
echo "<td>".$row["Home_No"];
echo "<td>".$row["Email"];
echo "<td>".$row["Username"];
echo "<td>".$row["Password"];
//echo "<td> <a href='editdelete.php'>Manage Students</a>";
echo "<td><input name='mngstd' type='button' value='Manage Student'/>";
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
 
  </form>
</body>
</html>