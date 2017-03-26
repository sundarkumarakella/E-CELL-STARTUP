<?php
ob_start();
SESSION_Start();
require_once 'dbconnect.php' ;

if(isset($_POST['submit']))
{
$email = $_POST['email'] ;
$password = $_POST['password'];

$res = mysql_query("SELECT name, email, password FROM users WHERE email = '$email'");
$row = mysql_fetch_array($res);
$count = mysql_num_rows($res);

if( $count == 1 && $row['password'] == $password )
{
	$_SESSION['user'] = $row['name'];
	header("location:home.php");
}
else
{
	echo "Incorrect credentials" ;
}
}
 
?>

<html>
<body>
<form method = "POST">
<table border = 1px>
<tr>
<th> Email </th>
<th> <input type = "email" name = "email" required=required /> </th>
</tr>

<tr>
<th> Password </th>
<th> <input type = "password" name = "password" required=required/> </th>
</tr>


<tr>
<th> <a href="register.php" > New User ? </a> </th>
 


<th> <input type="submit" value="login"  name=submit> </th>
</tr>
</table>
</form>

</body>
</html> 