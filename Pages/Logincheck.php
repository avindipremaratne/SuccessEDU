<?php 
session_start();
?>
<?php 
include("dbconnect.php");
?>
<?php 
$username=$_POST["txtusername"];
$password=trim($_POST["txtpassword"]); 

$_SESSION['username']=$_POST["txtusername"];
$_SESSION['userID']=$_POST["txtusername"];

$LoginSQL = "SELECT * FROM students WHERE Username ='".$username."' AND Password='".MD5($password)."'";
$result = mysqli_query($con,$LoginSQL); 
$row= mysqli_fetch_array($result);

$LoginSQL1 = "SELECT * FROM administrators WHERE Username = '".$username."' and Password = '".MD5($password)."'"; 

$result1 = mysqli_query($con,$LoginSQL1); 
 $row1= mysqli_fetch_array($result1);
	   
  if(!empty($row['Username']) AND !empty($row['Password'])) 
       { 
       $_SESSION['Username'] = $row['Password'];
      echo '<script type="text/javascript">alert("LOGIN SUCCESSFUl");</script>';
       header("Location:Studentmain.php"); 
       } 
       else if(!empty($row1['Username']) AND !empty($row1['Password'])) 
       { 
       $_SESSION['Username'] = $row1['Password'];
       echo '<script type="text/javascript">alert("LOGIN SUCCESSFUl");</script>';
       header("Location:Adminmain.php"); 
       } 
	   else
	   {
		   echo "SORRY...INVALID USERNAME OR PASSWORD";
	   }
			
?>