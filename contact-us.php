<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
h1{
font-family:Geneva, Arial, Helvetica, sans-serif;
color:#FFFFFF;
}
.mobile{
float:right;
margin-top:-7px;
font-size:30px;
text-decoration:underline;
font-weight:400;
}
form{
margin-left:40px;

}
span{
padding:6px;
}
.p1{
font-size:20px;
font-weight:700;
color:#0033FF;
}
input{
padding:10px 16px;
border-radius:0.6em;

}
body{
background-image:url(images/661201-1280x720.jpg);
background-size:cover;
}
textarea{
border-radius:0.6em;
}
.details{
margin-left:520px;
margin-top:-360px;
font-size:30px;
color:#006699;

}
a{
text-decoration:none;
font-weight:600px;
color:#33CCFF;}
</style>
</head>

<body>
<?php
session_start();
error_reporting(0);
 mysql_connect('localhost','root','');
 mysql_select_db('library');



if(isset($_POST['Full']) && isset($_POST["Email"]) && isset($_POST["problem"]) ){
$Full=$_POST["Full"];
$Email=$_POST["Email"];
$problem=$_POST["problem"];
if(!empty($Full) && !empty($Email) && !empty($problem))
{

mysql_query("INSERT INTO  `library`.`contact` (
`Full` ,
`Email` ,
`problem`
)
VALUES (
'$_POST[Full]', '$_POST[Email]',  '$_POST[problem]'
)");
}
else{
echo "Enter all fields";
}
}

?>






<form action="contact-us.php" method="POST">

<h1>CONTACT_US</h1>
<span></span><input type="text" name="Full" placeholder="Your name"/></p><br />

<span></span><input type="email" name="Email" placeholder="Email" /></p><br />

<span></span><input type="text" name="Mobile" placeholder="Mobile"/></p><br /><br />
<span></span><textarea name="problem" rows="6" cols="27" placeholder="message"></textarea><br /><br />
<span></span><input type="submit" value="Submit"/><br />
</form>
<div class="details">

Address:S-23 ,Sector F,ALiganj,Lucknow,Uttar Pradesh.<br /><br />
Email-us:<a href=" mailto:aayushjaiswal408@gmail.com">aayushjaiswal1408@gmail.com</a><br /><br />
Mobile:+91  987-334-5974



</div>
</body>
</html>
