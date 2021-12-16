<?php 
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Student</title>
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
#apDiv2 {
	position: absolute;
	left: 118px;
	top: 39px;
	width: 709px;
	height: 785px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 184px;
	top: 188px;
	width: 926px;
	height: 884px;
	z-index: 3;
	background-color: #090;
}
.font
{
padding: 10px 30px;
	background-color:#090;
	font:"Trebuchet MS", Arial, Helvetica, sans-serif ;
	color:#FFF;
	font-size:16px;
	font-weight:bold;
	border-radius:5px;	
	margin: 15px 5px;
	background-image:url(Images/rsz_graduate-icon-16.png) no-repeat;
	float:none;
	border: 3px solid #090;
}
.button
{
	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">

<form id="form1" name="form1" method="post" action="Confirmadd.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="chkgender"></label>
  </p>
  

<div id="apDiv1"> <b> <center> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Student </font> </center> </b></div>
<div id="apDiv3">
<div id="apDiv2">
  <table width="720" height="725" border="0">
    <tr align="left">
      <th width="252" height="43" scope="row"l><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Registration No</font></th>
      <td width="283"><label for="txtid"></label>
      <input type="text" name="txtid" id="txtid" /></td>
    </tr>
    <tr align="left">
      <th height="42" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Name </font></th>
      <td><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr align="left">
      <th height="43" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Gender </font></th>
      <td><p>
        <label>
          <input type="radio" name="chkgender" value="Male" id="chkgender_0" />
            <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Male </font></label>
        <label>
          <input type="radio" name="chkgender" value="Female" id="chkgender_1" />
           <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Female </font></label>
        <br />
      </p>
      <p></p></td>
    </tr>
    <tr align="left">
      <th height="38" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Date of Birth </font></th>
      <td><label for="txtdob"></label>
      <input type="text" name="txtdob" id="txtdob" /></td>
    </tr>
    <tr align="left">
      <th height="38" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1"> Address </font></th>
      <td><label for="txtnic">
        <input type="text" name="txtaddress" id="txtaddress" />
      </label></td>
    </tr>
    <tr align="left">
      <th height="40" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">NIC No </font></th>
      <td><label for="cmbcourse">
        <input type="text" name="txtnic" id="txtnic" />
      </label></td>
    </tr>
    <tr align="left">
      <th height="43" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Course </font></th>
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
    <tr align="left">
      <th height="41" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Batch </font></th>
      <td><label for="txtbatchindex">
        <input type="text" name="txtbatch" id="txtbatch" />
      </label></td>
    </tr>
    <tr align="left">
      <th height="40" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Batch Code </font></th>
      <td><label for="txtmobile">
        <input type="text" name="txtbatchindex" id="txtbatchindex" />
      </label></td>
    </tr>
    <tr align="left">
      <th height="46" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Mobile No </font></th>
      <td><label for="txthome">
        <input type="text" name="txtmobile" id="txtmobile" />
      </label></td>
    </tr>
    <tr align="left">
      <th height="40" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Home No </font></th>
      <td><input type="text" name="txthome" id="txthome" /></td>
    </tr>
    <tr align="left">
      <th height="48" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1"> Email </font></th>
      <td><input type="text" name="txtemail" id="txtemail" /></td>
    </tr>
    <tr align="left">
      <th height="57" scope="row"><label for="i">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Username </font></label></th>
      <td><input type="text" name="txtusername" id="txtusername" /></td>
    </tr>
    <tr align="left">
      <th height="55" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Password </font></th>
      <td><input type="text" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr align="left">
      <th height="78" scope="row">&nbsp;</th>
      <td><input type="submit" name="btnadd" id="btnadd" value="Add " class="button"/></td>
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
  <p>
    <label for="txtemail"></label>
    <label for="txtaddress"></label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label for="txtusername"></label>
  </p>
  <p>
    <label for="txtpassword"></label>
  </p>
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