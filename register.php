<?php
ob_start();
session_start();

include_once 'dbconnect.php' ;

if(isset($_POST['submit']))
{
   $name = $_POST['name'] ;
   $email = $_POST['email'] ;
   $password = $_POST['password'] ;
   $college = $_POST['college'] ;
   $url = $_POST['url'] ;

   $query = "INSERT INTO users(name,email,password,college,url) VALUES('$name','$email','$password','$college','$url')";
   $res = mysql_query($query);
   
   if($res)
{
header("location:login.php");
}
else
{
echo"not registered" ;
}


}

?>

<html>
<head>
<title> Register :: E Cell </title>

<link href="style.css" rel="stylesheet">


</head>

<body>
<div class=wrapper>
<form method="post">
<table border = 1px class=tab1 >

<tr>
<th>Name of Startup
<th><input type="text" name="name" /> </th>
</tr>

<tr>
<th> EMAIL</th>
<th><input type="email" name="email" /> </th>
</tr>

<tr>
<th>Password</th>
<th><input type="password" name="password" /> </th>
</tr>

<tr>
<th>Name of College</th>
<th><input type="text" name="college" /> </th>
</tr>

<tr>
<th>Website link </th>
<th><input type="url" name="url" /> </th>
</tr>

<tr>
<th><input type="submit"  value="register" name=submit /></th>
<th><input type="reset" value="clear" /></th>
</tr> 




</table>
</form>
</div>
 

</body>

</html>
