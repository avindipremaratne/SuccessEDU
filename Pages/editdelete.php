
<?php 

session_start();	

?>
<?php
 include("dbconnect.php" );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title> Update and Delete Student </title>
<head>

<script type="text/javascript">

function abc(e)
{
if (event.which == 13 || event.keyCode == 13)
 {
        //code to execute here
      alert("done");
    }
}

</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 65px;
	top: 76px;
	width: 819px;
	height: 733px;
	color: #FFF;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 206px;
	top: 190px;
	width: 942px;
	height: 922px;
	z-index: 2;
	background-color: #090;
	color: #FFF;
}
#apDiv3 {
	position: absolute;
	left: 359px;
	top: 56px;
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
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">

<?php 
$uid=$_COOKIE["uid"];
echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM students where Registration_No='". $uid."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{			
while($row=mysqli_fetch_array($result))
			{				
?>
<form id="form1" name="form1" method="post" action="Redirectupdatedelete.php">
<div id="apDiv2">
<div id="apDiv1">
  <table width="819" height="788" border="0">
    <tr>
      <th width="326" height="49" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif"  color="#FFFFFF">Registration Number </font> </b></th>
      <td width="328"><input type="text" name="txtid" id="txtid" value="<?php echo $row["Registration_No"]?>" onkeypress="abc(event);"/></td>
    </tr>
    <tr>
      <th height="55" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Student Name </font> </b></th>
      <td><input type="text" name="txtname" id="txtname" value="<?php echo $row["Name"]?>" /></td>
    </tr>
    <tr>
      <th height="47" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Gender </font> </b></th>
      <td><input type="text" name="txtgender" id="txtgender" value="<?php echo $row["Gender"]?>" /></td>
    </tr>
    <tr>
      <th height="49" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Date of birth </font></th>
      <td><input type="text" name="txtdob" id="txtdob"  value="<?php echo $row["Date_of_birth"]?>"/></td>
    </tr>
    <tr>
      <th height="42" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" >Address </font>   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" ></th>
      <td><input type="text" name="txtaddress" id="txtaddress" value="<?php echo $row["Address"]?>"/></td>
    </tr>
    <tr>
      <th height="37" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF"> NIC No </font> </b></th>
      <td><input type="text" name="txtnicno" id="txtnicno" value="<?php echo $row["NIC_No"]?>"/></td>
    </tr>
    <tr>
      <th height="39" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Course </font> </b></th>
      <td><input type="text" name="txtcourse" id="txtcourse" value="<?php echo $row["Course"]?>"/></td>
    </tr>
    <tr>
      <th height="36" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Batch </font> </b></th>
      <td><input type="text" name="txtbatch" id="txtbatch"  value="<?php echo $row["Batch"]?>"/></td>
    </tr>
    <tr>
      <th height="47" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif"color="#FFFFFF" >Batch Index </font> </b></th>
      <td><input type="text" name="txtbatchindex" id="txtbatchindex"  value="<?php echo $row["Batch_Index"]?>"/></td>
    </tr>
    <tr>
      <th height="43" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Mobile No </font> </b></th>
      <td><input type="text" name="txtmobile" id="txtmobile" value="<?php echo $row["Mobile_No"]?>"/></td>
    </tr>
    <tr>
      <th height="46" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif"color="#FFFFFF" >Home No </font> </b></th>
      <td><input type="text" name="txthome" id="txthome" value="<?php echo $row["Home_No"]?>" /></td>
    </tr>
    <tr>
      <th height="56" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif"color="#FFFFFF" >Email </font> </b></th>
      <td><input type="text" name="txtemail" id="txtemail" value="<?php echo $row["Email"]?>"/></td>
    </tr>
    <tr>
      <th height="51" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Username </font> </b></th>
      <td><input type="text" name="txtusername" id="txtusername" value="<?php echo $row["Username"]?>"/></td>
    </tr>
    <tr>
      <th height="51" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF">Password </font> </b></th>
      <td><input type="text" name="txtpassword" id="txtpassword" value="<?php echo $row["Password"]?>"/></td>
    </tr>
    <tr>
      <th height="76" scope="row"><input type="submit" name="btnsbutton[1]" id="btnupdate" value="Update"  class="button"/></th>
      <td><input type="submit" name="btnsbutton[2]" id="btndelete" value="Delete" class="button"/></td>
    </tr>
      <?php }}?>
  </table>
  </div>
  </div>
  


  <p>
    <label for="txtid"></label>
  </p>
  <p>
    <label for="txtname"></label>
  </p>
  <p>
    <label for="txtgender"></label>
  </p>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Manage Students</font></b>
    </center>
  </div>
  <p>
    <label for="txtdob"></label>
  </p>
  <p>
    <label for="txtaddress"></label>
    <label for="txtusername"></label>
  </p>
  <p>
    <label for="txtnicno"></label>
    <label for="txtpassword"></label>
  </p>
  <p>
    <label for="txtcourse"></label>
  </p>
  <p>
    <label for="txtbatch"></label>
  </p>
  <p>
    <label for="txtbatchindex"></label>
  </p>
  <p>
    <label for="txtmobile"></label>
  </p>
  <p>
    <label for="txthome"></label>
  </p>
  <p>
    <label for="txtemail"></label>
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