
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
#apDiv2 {	position: absolute;
	left: 93px;
	top: 74px;
	width: 709px;
	height: 552px;
	z-index: 2;
}
#apDiv3 {position: absolute;
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
<?php 
$uid=$_COOKIE["uid"];

//echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM assignments where Assignment_No='".$uid."'");
if(!$result)
{
	echo "Database query execution fail";
}
else

{
			while($row=mysqli_fetch_array($result))
			{
	
?>

<form action="cnfrmassignsubmit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <div id="apDiv1">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Assignment Submission</font></b>
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
  <p>&nbsp;</p>
  <p>
    <label for="txtstid"></label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label for="txtstname"></label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv3">
    <div id="apDiv2">
      <table width="720" height="590" border="0">
        <tr align="left">
          <th width="252" scope="row"l="l"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Assignment No </font></th>
          <td width="283"><label for="cmbcourse" ></label>
            <label for="txtbatch">
              <input type="text" name="txtano" id="txtano" value="<?php echo $row["Assignment_No"]?>"/>
            </label></td>
        </tr>
        <tr align="left">
          <th height="78" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Course</font></th>
          <td><input type="text" name="txtcourse" id="txtcourse" value="<?php echo $row["Course"]?>"></td>
        </tr>
        <tr align="left">
          <th height="45" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Module </font></th>
          <td valign="middle"><p>
            <input type="text" name="txtmodule" id="txtmodule" value="<?php echo $row["Module"]?>"/>
          </p></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Batch Index</font></th>
          <td><label for="txtaname"></label>
            <input type="text" name="txtbatch" id="txtbatch" value="<?php echo $row["Batch_Index"]?>"/></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Assignment Name </font></th>
          <td><input type="text" name="txtaname" id="txtaname" value="<?php echo $row["Assignment_Name"]?>"/></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Date of Issue </font></th>
          <td><input type="text" name="txtdateissue" id="txtdateissue" value="<?php echo $row["Date_of_issue"]?>"/></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Date of Submit </font></th>
          <td><label for="file"></label>
            <label for="txtbatch">
              <input type="text" name="txtdatesubmit" id="txtdatesubmit" value="<?php echo $row["Date_of_submit"]?>"/>
            </label></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">File </font></th>
          <td><label for="stassign"></label>
          <input type="file" name="stassign" id="stassign" /></td>
        </tr>
        <tr align="left">
          <th scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Student NIC</font></th>
          <td><input type="text" name="txtstid" id="txtstid" /></td>
           <?php }}?>
        </tr>
        <tr align="left">
          <th scope="row">  <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Student Name </font></th>
          <td><label for="cmbstname">
            <input type="text" name="txtstname" id="txtstname" />
          </label></td>
        </tr>
        <tr align="left">
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="btnadd" id="btnadd" value="Add Assignment" /></td>
        </tr>
      </table>
    </div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>