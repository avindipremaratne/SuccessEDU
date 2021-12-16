<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Batch</title>
<style type="text/css">
#apDiv1 {position: absolute;
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
#apDiv2 {position: absolute;
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
#apDiv3 {position: absolute;
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
#apDiv4 {position: absolute;
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
#apDiv5 {
	position: absolute;
	left: 110px;
	top: 145px;
	width: 1161px;
	height: 685px;
	z-index: 2;
}
#apDiv6 {
	position: absolute;
	left: 216px;
	top: 47px;
	width: 722px;
	height: 365px;
	z-index: 3;
	background-color: #090;
	border-radius: 25px;
}

.button
{
	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}

</style>
</head>

<?php 
include("dbconnect.php");
?>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<form id="form1" name="form1" method="post" action="confirmaddbatch.php">
  <div id="apDiv1">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Course</font></b>
    </center>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv2">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Course</font></b>
    </center>
  </div>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Course</font></b>
    </center>
  </div>
  <div id="apDiv4">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Batch</font></b>
    </center>
  </div>
  <div id="apDiv5">
    <div id="apDiv6">
      <table width="720" height="310" border="0">
        <tr align="left">
          <th width="252" height="74" scope="row"l="l"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Batch Index</font></th>
          <td width="283"><label for="txtid3"></label>
            <input type="text" name="txtbatchindex" id="txtid3" /></td>
        </tr>
        <tr align="left">
          <th height="107" scope="row"><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Course </font></th>
          <td><label for="txtname">
            <?php
            $select="SELECT Name FROM courses";
			
$result=mysqli_query($con,$select);

if(!$result)
{
	die("Course Select Error".mysqli_error($con));
}
else
{
	?>
            <select name="lstCourse" id="lstCourse">
              <?php
while($row=mysqli_fetch_array($result))
{		
echo "<option>".$row["Name"]."</option>" ;
}          

}
?>
            </select>
          </label></td>
        </tr>
        <tr align="left">
          <th height="90" scope="row">&nbsp;</th>
          <td valign="middle"><p>
            <label for="lstCourse"></label>
            <input type="submit" name="btnadd" id="btnadd" value="Add Course" class="button" />
            <br />
          </p></td>
        </tr>
      </table>
    </div>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>