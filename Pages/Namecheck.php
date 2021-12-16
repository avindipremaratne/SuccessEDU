<?php 
include("dbconnect.php");
?>

<?php 
$_SESSION['User_ID'] = $ID;
$NameSQL = "SELECT Name FROM users WHERE User_ID=".$_SESSION['ID'];
?>