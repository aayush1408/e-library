<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<styLe>
body{
max-height:1000px;
background-attachment:fixed;
overflow-x:hidden;
}
h2{
font-family:"Bookman Old Style", Tahoma, "Microsoft Himalaya";
font-size:40px;
color:#FFFFFF;
margin-left:34px;
text-decoration:underline;
}
span{
padding:0px 6px;
}
p{
margin-left:34px;
}
.span_1{
display:inline-block;
font-family:cursive, fantasy, Roman ;
}
input{
padding:4px 6px;
border-radius:2px;
text-shadow:#333333;
/*border-bottom:dashed;
border-color:#6633FF;
border-bottom-color:#000000;*/
}
:focus{
background-color:#999999;
}
body{
background-image:url(images/Grey-Texture-Background-and-Wallpaper-1.png);
background-size:cover;
background-attachement:fixed;
}
[type=textarea]{
padding:28px;
margin-left:40px;
}
.opt{
padding:5px;
}
form{
background-color:#CCCCCC;
margin-right:900px;
opacity:0.9;
padding-top:3px;
overflow:scroll;
}
h1{
text-align:center;
position:relative;
bottom:700px;
left:190px;
font-size:100px;
color:#00CCFF;
opacity:0.8;
font-family:Corbel, Ebrima, "Franklin Gothic Medium";
}
</style>
</head>

<body>
<?php
session_start();
 error_reporting(0);
 mysql_connect('localhost','root','');
 mysql_select_db('library');


mysql_query("INSERT INTO  `library`.`sign-up` (
`First` ,
`Last` ,
`Mobile` ,
`Email` ,
`Gender` ,
`Username` ,
`Password` ,
`R_Password`,
`interest`
)
VALUES (
'$_POST[First]',  '$_POST[Last]',  '$_POST[Mobile]',  '$_POST[Email]',  '$_POST[Gender]',  '$_POST[Username]',  '$_POST[Password]',  '$_POST[RPassword]',  '$_POST[interest]'
)");

/*$a="INSERT INTO `library`.`sign-up` (`First`, `Last`, `Mobile`, `Email`, `Gender`, `Username`, `Password`, `interest`) VALUES ('$_POST[First]', '$_POST[Last]', '$_POST[Mobile]', m
'$_POST[Email]', '$_POST[Gender]', '$_POST[Username]', '$_POST[Password]',  '$_POST[interest]'
')";
mysql_query($a);
*/



/*
if ( isset($_POST['First']) && isset($_POST['Last']) && isset($_POST['Mobile']) && isset($_POST['Email']) && isset($_POST['Gender']) && isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['RPassword']) && isset($_POST['interest']) )
{
$First = $_POST['First'];
$Last = $_POST['Last'];
$Mobile = $_POST['Mobile'];
$Email = $_POST['Email'];
$Gender = $_POST['Gender'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$RPassword = $_POST['RPassword'];
$interest = $_POST['interest'];
if ( !empty($First) && !empty($Last) && !empty($Mobile) && !empty($Email) && !empty($Gender) && !empty($Username) && !empty($Password) && !empty($RPassword) && !empty($interest) )
{
echo "eff";
if($Password!=$R_Password)
{
echo "Passwords arent same";
}

}
else{
echo "Enter all the fields";
}

}
}*/
?>
<h2>Sign-up</h2><br />

<form action= "Signup.php" method="POST">
<p><span class="span_1">First Name :</span> <span></span><input type="text" name="First"/></p><br />
<p><span class="span_1">Last Name :</span> <span></span><input type="text" name="Last" /></p><br />
<p><span class="span_1">Mobile :</span> <span></span><input type="number" name="Mobile" /></p><br />
<p><span class="span_1">Email :</span> <span></span><input type="email" name="Email" /></p><br/>

<p><span class="span_1">Gender</span> <span></span><select class="opt" name="Gender">
<option disabled selected hidden>Gender</option>
<option>Male</option>
<option>Female</option>
</select></p><br />
<p><span class="span_1">Username:</span> <span></span><input type="text" name="Username" /></p><br />
<p><span class="span_1">Password:</span> <span></span><input type="password" name="Password" /></p><br />
<p><span class="span_1">Re-enter Password</span> <span></span><input type="password" name="RPassword" /></p><br />
<p><span class="span_1">Whats your area of interest?</p>
<span id="area"><input type="textarea" name="interest" /></span><br />
<p><input type="submit" value="Submit"/>
</form>
<h1>Signup Fast...</h1>
</body>
</html>

