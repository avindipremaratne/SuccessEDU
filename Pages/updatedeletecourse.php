<?php 

session_start();	

?>
<?php
 include("dbconnect.php" );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update and Delete Student</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 268px;
	top: 208px;
	width: 819px;
	height: 365px;
	z-index: 1;
	background-color: #090;
}
.button
{
	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}
#apDiv3 {
	position: absolute;
	left: 344px;
	top: 89px;
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
<?php 
$uid=$_COOKIE["uid"];

echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM courses where Course_ID='". $uid."'");
if(!$result)
{
	echo "Database query execution fail";
}
else

{
			while($row=mysqli_fetch_array($result))
			{
				
?>
<form id="form1" name="form1" method="post" action="Redirectcourse.php">
  <p>&nbsp;</p>
  <div id="apDiv1">
    <table width="819" height="363" border="0">
      <tr>
        <th width="326" height="61" scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Course ID </font></th>
        <td width="328"><input type="text" name="txtid" id="txtid" value="<?php echo $row["Course_ID"]?>" onkeypress="abc(event);"/></td>
      </tr>
      <tr>
        <th height="62" scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Name </font></th>
        <td><input type="text" name="txtname" id="txtname" value="<?php echo $row["Name"]?>" /></td>
      </tr>
      <tr>
        <th height="111" scope="row"> <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Modules </font></th>
        <td><label for="txtmodules"></label>
          <textarea name="txtmodules" id="txtmodules" cols="45" rows="5"> <?php echo $row["Modules"]?></textarea></td>
      </tr>
      <tr>
        <th height="53" scope="row">I <font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif"> Index </font></th>
        <td><input type="text" name="txtindex" id="txtindex"  value="<?php echo $row["B_Index"]?>"/></td>
      </tr>
      <tr>
        <th height="64" scope="row"><input type="submit" name="btncbutton[1]" id="btncbutton[1]" value="Update"  class="button"/></th>
        <td><input type="submit" name="btncbutton[2]" id="btncbutton[2]" value="Delete" class="button"/></td>
      </tr>
      <?php }}?>
    </table>
  </div>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Manage Course</font></b>
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
</form>
</body>
</html>