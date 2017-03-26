<?php
ob_start();
SESSION_Start();
require_once 'dbconnect.php' ;
if(!isset($_SESSION['user']) )
{
	header("location : index.php");
	exit ;
}
$res = mysql_query("SELECT * FROM users WHERE name =".$_SESSION['user']);
$userRow = mysql_fetch_array($res);

?>

<html>
<body>
<h2> WELCOME - <?php echo $userRow['name']; ?> </h2>
<a href="logout.php?logout">Sign Out</a>
</body>
</html>