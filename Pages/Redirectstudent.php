<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if(isset($_POST["btnbutton"]))
	{
		foreach($_POST['btnbutton'] as $key => $value)
		{
			if($key==1)
			{
				header("Location:Studentprofile.php");
				}
				elseif($key==2)
				{
						header("Location:searchviewassign.php");
					}
					elseif($key==3)
				{
						header("Location:searchassignsubmit.php");
					}
					elseif($key==4)
				{
						header("Location:Studentsearchcourse.php");
					}
					elseif($key==5)
				{
						header("Location:Login.php");
					}
		}
	}
?>
</body>
</html>