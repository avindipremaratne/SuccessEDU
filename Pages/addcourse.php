<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {	position: absolute;
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
	left: 107px;
	top: 73px;
	width: 709px;
	height: 272px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 219px;
	top: 242px;
	width: 926px;
	height: 447px;
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

<body background="abstract-dark-wallpapers-pretty-green-walls.jpg">
<form id="form1" name="form1" method="post" action="cfrmaddcourse.php">
  <div id="apDiv1">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" >Add a New Course</font></b>
    </center>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv3">
    <div id="apDiv2">
      <table width="720" height="346" border="0">
        <tr align="left">
          <th width="252" height="51" scope="row"l="l"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Course ID</font></th>
          <td width="283"><label for="txtid"></label>
            <input type="text" name="txtid" id="txtid" /></td>
        </tr>
        <tr align="left">
          <th height="48" scope="row"> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFFFFF" size="+1">Name </font></th>
          <td><label for="txtname"></label>
            <input type="text" name="txtname" id="txtname" /></td>
        </tr>
        <tr align="left">
          <th height="111" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Modules</font></th>
          <td valign="middle"><p>
            <textarea name="txtmodules" id="txtmodules" cols="45" rows="5"></textarea>
            <br />
          </p></td>
        </tr>
        <tr align="left">
          <th height="62" scope="row"><font color="#FFFFFF" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Index</font></th>
          <td><label for="txtdob">
            <input type="text" name="txtindex" id="txtindex" />
          </label></td>
        </tr>
        <tr align="left">
          <th height="62" scope="row">&nbsp;</th>
          <td><input type="submit" name="btnadd" id="btnadd" value="Add Course" class="button"/></td>
        </tr>
      </table>
    </div>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="txtmodules"></label>
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
</form>
</body>
</html>