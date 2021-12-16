<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 389px;
	top: 76px;
	width: 538px;
	height: 40px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 303px;
	top: 133px;
	width: 473px;
	height: 186px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 257px;
	top: 71px;
	width: 471px;
	height: 236px;
	z-index: 2;
	background-color:transparent;
	
}
#apDiv4 {
	position: absolute;
	left: 250px;
	top: 173px;
	width: 767px;
	height: 374px;
	z-index: 3;
	background-color: #090;
	border:3px solid #060;
	 border-radius: 15px 50px;
	 color:#FFF;
}
.button
{
	
	font-size:14px;
	font-weight:bold;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	
	}
	
	.srcbtn
{
	width: 200px;
	height: 200px;
	}

#apDiv5 {
	position: absolute;
	left: 274px;
	top: 254px;
	width: 130px;
	height: 182px;
	z-index: 4;
}
</style>
</head>

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">


<div id="apDiv5">
  <input type="image" name="imglogin" id="imglogin" src="../Images/graduated.png" class="srcbtn"/>
</div>
<form id="form1" name="form1" method="post" action="Logincheck.php">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="txtpassword"></label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label for="txtusername6"></label>
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
  <div id="apDiv1"> <center> <b> <marquee><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+2">Success EDU Assignment Submission System Login  </font> </marquee>  </b> </center></div>
  <div id="apDiv4" >
  <div id="apDiv3">
  <table width="471" height="212" border="0">
    <tr>
      <th width="216" height="50" scope="row">&nbsp;</th>
      <td width="239">&nbsp;</td>
    </tr>
    <tr>
      <th height="54" scope="row"><font size="+1">Username </font></th>
      <td><input type="text" name="txtusername" id="txtusername6" /></td>
    </tr>
    <tr>
      <th scope="row"><font size="+1">Password </font></th>
      <td><input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <th scope="row"><input type="submit" name="btnlogin" id="btnlogin" value="Login" class="button"/></th>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
  </div>
</form>
</body>
</html>