<?php 
session_start();	
?>
<?php 
include ("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Profile</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 343px;
	top: 52px;
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
	left: 118px;
	top: 39px;
	width: 709px;
	height: 785px;
	z-index: 2;
}
#apDiv3 {	position: absolute;
	left: 184px;
	top: 188px;
	width: 926px;
	height: 854px;
	z-index: 3;
	background-color: #090;
}
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<?php 
$username=$_SESSION['username'];

//echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM students where Registration_No='".$username."'");
 
if(!$result)
{
	echo "Database query execution fail";
}
 else
		  {
?>
<form id="form1" name="form1" method="post" action="">
  <div id="apDiv1">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Student Profile</font></b>
    </center>
  </div>
  <div id=apDiv2">
  <div id="apDiv3">

      <table width="720" height="696" border="0" align="center">
        <tr align="left">
          <th width="348" height="43" scope="row"l="l"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Student ID </font></th>
          <td width="362"><label for="txtid"></label>
          
          <?php		  
         
			while($row=mysqli_fetch_array($result))
			{
	
	?>
          
            <input type="text" name="txtid" id="txtid" value="<?php echo $row["Registration_No"]?>"/></td>
        </tr>
        <tr align="left">
          <th height="42" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Name </font></th>
          <td><label for="txtname"></label>
            <input type="text" name="txtname" id="txtname" value="<?php echo $row["Name"]?>" /></td>
        </tr>
        <tr align="left">
          <th height="43" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Gender </font></th>
          <td><p>
            <input type="text" name="txtgender" id="txtgender" value="<?php echo $row["Gender"]?>"/>
            <br />
          </p></td>
        </tr>
        <tr align="left">
          <th height="38" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Date of Birth </font></th>
          <td><label for="txtdob"></label>
            <input type="text" name="txtdob" id="txtdob" value="<?php echo $row["Date_of_birth"]?>"/></td>
        </tr>
        <tr align="left">
          <th height="38" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Address </font></th>
          <td><label for="txtnic">
            <input type="text" name="txtaddress" id="txtaddress" value="<?php echo $row["Address"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="40" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">NIC No </font></th>
          <td><label for="cmbcourse">
            <input type="text" name="txtnic" id="txtnic"  value="<?php echo $row["NIC_No"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="43" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Course </font></th>
          <td><label for="txtbatch">
            <input type="text" name="txtcourse" id="txtcourse" value="<?php echo $row["Course"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="41" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Batch </font></th>
          <td><label for="txtbatchindex">
            <input type="text" name="txtbatch" id="txtbatch" value="<?php echo $row["Batch"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="40" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1"> Batch Code </font></th>
          <td><label for="txtmobile">
            <input type="text" name="txtbatchindex" id="txtbatchindex" value="<?php echo $row["Batch_Index"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="46" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Mobile No </font></th>
          <td><label for="txthome">
            <input type="text" name="txtmobile" id="txtmobile" value="<?php echo $row["Mobile_No"]?>"/>
          </label></td>
        </tr>
        <tr align="left">
          <th height="40" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Home No </font></th>
          <td><input type="text" name="txthome" id="txthome" value="<?php echo $row["Home_No"]?>"/></td>
        </tr>
        <tr align="left">
          <th height="48" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Email </font></th>
          <td><input type="text" name="txtemail" id="txtemail" value="<?php echo $row["Email"]?>"/></td>
        </tr>
        <tr align="left">
          <th height="57" scope="row"><label for="i"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Username </font></label></th>
          <td><input type="text" name="txtusername" id="txtusername" value="<?php echo $row["Username"]?>"/></td>
        </tr>
        <tr align="left">
          <th height="62" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Password </font></th>
          <td><input type="text" name="txtpassword" id="txtpassword"  value="<?php echo $row["Password"]?>"/></td>
         </tr>
    
        <?php 
		}
		}
		
		?>
      </table>
</div>
</div>
   </form>	
</body>
</html>