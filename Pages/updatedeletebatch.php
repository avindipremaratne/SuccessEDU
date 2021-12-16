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
<title>Manage Batch</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 264px;
	top: 223px;
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
	left: 345px;
	top: 76px;
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
 $result=mysqli_query($con,"SELECT * FROM Batch where Batch_Index='". $uid."'");
if(!$result)
{
	echo "Database query execution fail";
}
else

{
			while($row=mysqli_fetch_array($result))
			{
				
?>
<form id="form1" name="form1" method="post" action="Redirectbatch.php">
  <p>&nbsp;</p>
  <div id="apDiv1">
    <table width="819" height="363" border="0">
      <tr>
        <th width="326" height="61" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Batch Index </font></th>
        <td width="328"><input type="text" name="txtbatchindex" id="txtbatchindex" value="<?php echo $row["Batch_Index"]?>" onkeypress="abc(event);"/></td>
      </tr>
      <tr>
        <th height="62" scope="row">  <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Name </font></th>
        <td><input type="text" name="txtname" id="txtname" value="<?php echo $row["Name"]?>" /></td>
      </tr>
      <tr>
        <th height="111" scope="row"><input type="submit" name="btnbbutton[1]" id="btnbbutton[1]" value="Update" class="button" /></th>
        <td><label for="txtmodules">
          <input type="submit" name="btnbbutton[2]" id="btnbbutton[2]" value="Delete"  class="button"/>
        </label></td>
      </tr>
      <tr>
        <th height="53" scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th height="64" scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <?php }}?>
    </table>
  </div>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Manage Batch</font></b>
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