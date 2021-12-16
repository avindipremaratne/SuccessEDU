<?php 
session_start();
?>
<?php 
	if(isset($_POST["btnbbutton"]))
	{
		foreach($_POST['btnbbutton'] as $key => $value)
		{
			if($key==1)
			{
				$_SESSION["batchindex"]=$_POST["txtbatchindex"];
				$_SESSION["name"]=$_POST["txtname"];
				
				header("Location:Updatebatch.php");
				}
				elseif($key==2)
				{
						$_SESSION["batchindex"]=$_POST["txtbatchindex"];
						header("Location:deletebatch.php");
					}
				
			}
	}
?>
