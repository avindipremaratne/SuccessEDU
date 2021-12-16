<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 185px;
	top: 38px;
	width: 230px;
	height: 91px;
	z-index: 1;
}
</style>
</head>

<body>
<div id="apDiv1">
  <input type="submit" name="up" id="up" value="Submit" />
</div>

<?php 

date_default_timezone_set('Asia/Kolkata');

$date = date('Y-m-d');
$time=date('H:i:s');

echo $date;
echo "<br />".$time;

//$x=date('9');

if($date==0)
{
	echo "<style type='text/css'>#apDiv1{display:none;}</style>";

}
?>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>