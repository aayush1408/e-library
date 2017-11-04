<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style>

.books_name{
font-style:italic;
}
</style>

</head>

<body>
<?php
$id=$_REQUEST['id'];
 
require 'connect.php';
$query="SELECT * FROM `Books` WHERE `Type`='$id' ";
if($query_run=mysql_query($query)){
while($row=mysql_fetch_array($query_run)){

echo "<div class=books_name>".$row['Books_name']."</div>";
echo $row['Type'];
echo $row['Ratings'];



}
}
?> 
</body>
</html>
