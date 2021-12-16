<?php 
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Course</title>
<style type="text/css">
#apDiv1 {	position: absolute;
	left: 74px;
	top: 57px;
	width: 484px;
	height: 294px;
	z-index: 1;
	background-color: #FFF;
}
#apDiv2 {
	position: absolute;
	left: 334px;
	top: 182px;
	width: 630px;
	height: 368px;
	z-index: 2;
	border-radius: 15px 50px;
	background-color: #090;
}
.button
{
	width:100px;
	height:40px;
	padding: 5px 20px;
	background-color:#090;
	font:"Trebuchet MS", Arial, Helvetica, sans-serif ;
	color:#FFF;
	font-size:14px;
	font-weight:bold;
	border-radius:5px;	
	margin: 15px 5px;
	 transition: all 0.5s;
 	 cursor: pointer;
	border: 3px solid #090;
	
	}

#apDiv3 {	position: absolute;
	left: 350px;
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
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<form id="form1" name="form1" method="post" action="Managecourse.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv2" >
    <div id="apDiv1">
      <table width="483" height="267" border="0">
        <tr>
          <th width="163" height="77" scope="row">Select Course</th>
          <td width="310"><p>
            <select name="cmbcourse" id="cmbcourse">
              <?php 
	$result=mysqli_query($con,"SELECT * FROM Courses");	
if(!$result)
{
	echo "Database query execution fail";
}
else
{
	while($row=mysqli_fetch_array($result))
{		
echo "<option>".$row["Name"]."</option>" ;
}
}
?>
            </select>
            <br />
          </p></td>
        </tr>
        <tr>
          <th height="62" scope="row">&nbsp;</th>
          <td><input type="submit" name="btnsearch" id="btnsearch" value="Search" class="button"/></td>
        </tr>
        <tr>
          <th height="63" scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
  </div>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Search Course</font></b>
    </center>
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
</form>
</body>
</html>