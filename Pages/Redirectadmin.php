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
				header("Location:Newstudent.php");
				}
				elseif($key==2)
				{
						header("Location:Searchstudent.php");
					}
					elseif($key==3)
				{
						header("Location:addassignment.php");
					}
					elseif($key==4)
				{
						header("Location:Searchassignment.php");
					}
					
					elseif($key==5)
				{
						header("Location:addcourse.php");
					}
					elseif($key==6)
				{
						header("Location:Searchcourse.php");
					}
					
					elseif($key==7)
				{
						header("Location:addbatch.php");
					}
					elseif($key==8)
				{
						header("Location:Searchbatch.php");
					}
					elseif($key==9)
				{
						header("Location:Login.php");
					}
			}
	}
?>
</body>
</html>