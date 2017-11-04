<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
background-image:url(images/81019.jpg);
background-size:cover;}
.main{
position:relative;
text-align:center;
top:160px;
left:-30px;
background-color:#CCCCCC;
opacity:0.9;
padding:80px 0px 50px 0px;
margin-left:230px;
margin-right:200px;
}
h3{
psition:relative;
top:30px;
dispaly:inline-block;
font-size:30px;
font-family:"Courier New", Courier, monospace;
background-color:#999999;
opacity:0.5;
margin-top:-80px;
padding:10px;
height:30px;
color:#000000;
}
form{
margin-top:50px;}
p{
padding:5px 10px 5px 6px;
font-family:Georgia, "Times New Roman", Times, serif;
font-weight:bold;}
span{
padding:0px 10px;
}
[type=text]{
padding:4px;
border-radius:4px;
}
[type=password]{
padding:4px;
border-radius:4px;
}
[type=submit]{
padding:3px;
border-radius:4px;
background-color:#FFFFFF;
text-shadow:#CCCCCC;
}
input:focus{
background-color:#CCCCCC;
text-shadow:#999999;
}
</style>
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


<div class="main">
<h3>LOG_IN</h3>
<form action="log-in.php" method="POST">
<p>Username <span></span><input type="text" name="User"/></p>
<p>Password  <span></span><input type="password" name="password"/></p>
<input type="submit" value="Submit" />
</form>
</div>

</body>
</html>
