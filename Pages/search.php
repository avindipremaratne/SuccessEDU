<?php 
session_start();
include("dbconnect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv3 {	position: absolute;
	left: 465px;
	top: 18px;
	width: 368px;
	height: 72px;
	z-index: 2;
}
#apDiv4 {
	position: absolute;
	left: 306px;
	top: 125px;
	width: 722px;
	height: 298px;
	z-index: 3;
	border-radius: 15px 50px;
	background-color:#090;
}
.font1
{
	
	font-size:14px;
	color:#FFF;
	font-weight:bold;
	
	font-family:"Microsoft YaHei UI";
	}
</style>
</head>

<body background="Images/abstract-dark-wallpapers-pretty-green-walls.jpg">
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
<form id="form1" name="form1" method="post" action="">
  <div id="apDiv4">
    <table width="723" height="296" border="0">
      <tr>
        <th width="316" scope="row"> <font class="font1" > Student ID </font> </th>
        <td width="391"><label for="txtid2"></label>
          <input type="text" name="txtid" id="txtid2" /></td>
      </tr>
      <tr>
        <th scope="row">Student Name</th>
        <td><label for="txtname"></label>
          <input type="text" name="txtname" id="txtname" /></td>
      </tr>
      <tr>
        <th scope="row">Student Address </th>
        <td><label for="txtaddress"></label>
          <input type="text" name="txtaddress" id="txtaddress" /></td>
      </tr>
      <tr>
        <th scope="row">Student Course</th>
        <td><label for="txtbatch"></label>
          <select name="cmbcourse" id="cmbcourse">
            <?php
      $resultcourse=mysqli_query($con,"SELECT Name FROM Courses ");
if(!$resultcourse)
{
	echo "Database query execution fail";
}
  else
{

    	while($row=mysqli_fetch_array($resultcourse))
		{	
		echo "<option>". $row["Name"]."</option>";
		}
}
	  ?>
          </select></td>
      </tr>
      <tr>
        <th scope="row">Student Batch</th>
        <td><label for="txtbatch"></label>
          <label for="cmbcourse"></label>
          <label for="stimg"></label>
          <input type="text" name="txtbatch" id="txtbatch" /></td>
      </tr>
      <tr>
        <th scope="row">Student Image</th>
        <td><input type="file" name="stimg" id="stimg" /></td>
      </tr>
      <tr>
        <th scope="row"><input type="submit" name="btnadd" id="btnadd" value="Add" /></th>
        <td><input type="submit" name="btnclear" id="btnclear" value="Clear" /></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>