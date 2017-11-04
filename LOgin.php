<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

require 'connect.php';

if( isset ($_POST['Username']) && isset($_POST['Password']) )
{
$Username=$_POST['Username'];
$Password=$_POST['Password'];
if(!empty($Username) && !empty($Password)){
$password_hash = md5($Password);
$query="SELECT `Id` FROM `try` WHERE `Username`='$Username' AND `Password`='$Password' ";

if($query_run=mysql_query($query))
{
$query_num_row=mysql_num_rows($query_run);
if($query_num_row==1){
$user_id=mysql_result($query_run,'0','Id');
$_SESSION['user']=$user_id;
header ('Location:log.php');
}
else{
echo "Invalid User";
}
}

}

else{
echo "Enter something";
}
}


?>



<form action='LOgin.php' method='POST'>
Username:<input type="text" name="Username" />
PAssword:<input type="password" name="Password" />
<input type="submit" value="LOgin" />
</form>
</body>
</html>
