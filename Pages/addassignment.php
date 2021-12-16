<?php
 include("dbconnect.php" );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {	
position: absolute;
	left: 365px;
	top: 34px;
	width: 540px;
	height: 36px;
	padding: 10px 30px;
	background-color: #090;
	color: #FFF;
	font-size: 24px;
	border-radius: 15px 50px 30px 5px;
	margin: 15px 5px;
	z-index: 1;
}
.button
{
	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}
#apDiv2 {
	position: absolute;
	left: 93px;
	top: 74px;
	width: 709px;
	height: 552px;
	z-index: 2;
}
#apDiv3 {	position: absolute;
	left: 184px;
	top: 188px;
	width: 926px;
	height: 706px;
	z-index: 3;
	background-color: #090;
}
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<form action="Cnfrmaddassignment.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv1">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add New Assignment</font></b>
    </center>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv3">
    <div id="apDiv2">
      <table width="720" height="590" border="0">
        <tr align="left">
          <th width="252" scope="row"l="l"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Assignment No </font></th>
          <td width="283"><label for="cmbcourse"></label>            <label for="txtbatch">
            <input type="text" name="txtano" id="txtano" />
          </label></td>
        </tr>
        <tr align="left">
          <th height="78" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Course</font></th>
          <td><select name="cmbcourse" id="cmbcourse">
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
        <tr align="left">
          <th height="45" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Module </font></th>
          <td valign="middle"><p>
          
            <label for="cmbmodule"></label>
            <select name="cmbmodule" id="cmbmodule">
            <?php 
             $resultcourse=mysqli_query($con,"SELECT Modules FROM Courses");
if(!$resultcourse)
{
	echo "Database query execution fail";
}
  else
{
    	while($row=mysqli_fetch_array($resultcourse))
		{	
		$mycourse = $row["Modules"];
		$mycourseArray = explode(',', $mycourse);
			foreach ($mycourseArray as $module) 
			{
    			echo "<option value='$module'> $module </option>";
				
			}		
		
		}
}
	  ?>            
            </select>
          </p></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Batch Index</font></th>
          <td><label for="cmbbatch"></label>
            <select name="cmbbatch" id="cmbbatch">
             <?php
      $resultcourse=mysqli_query($con,"SELECT Batch_Index FROM Batch ");
if(!$resultcourse)
{
	echo "Database query execution fail";
}
  else
{

    	while($row=mysqli_fetch_array($resultcourse))
		{	
		echo "<option>". $row["Batch_Index"]."</option>";
		}
}
	  ?>
          </select>            <label for="txtaname"></label></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Assignment Name </font></th>
          <td><input type="text" name="txtaname" id="txtaname" /></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Date of Issue </font></th>
          <td><input type="text" name="txtdateissue" id="txtdateissue" /></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Date of Submit </font></th>
          <td><label for="file"></label>            <label for="txtbatch">
            <input type="text" name="txtdatesubmit" id="txtdatesubmit" />
          </label></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">File </font></th>
          <td><input type="file" name="assignment" id="file" /></td>
        </tr>
        <tr align="left">
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="btnadd" id="btnadd" value="Add Assignment"  class="button"/></td>
        </tr>
      </table>
    </div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="txtmodule"></label>
  </p>
  <p>&nbsp;</p>
  <label for="txtano"></label>
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
</form>
</body>
</html>