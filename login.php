<!docttype html>
<html>
<head>
<meta charset="utf-8">
<title> chat website 
</title>
  <link rel="stylesheet" href="style.css">
<style>
*{margin:0px; padding:0px;background-color: #dc0010c}
#main{  margin-top:100px;border-radius: 20px;width:400px; margin:24px auto;}
</style>
</head>
 </body>
<?php 
session_start();
include 'dbh.php'  ;
$uname=$_POST['uname'];
$password=$_POST['password'];

$sql ="SELECT *  FROM  signup WHERE username='$uname' AND  password='$password'";

$result= $conn->query($sql);
if(!$row=$result->fetch_assoc()){
     echo'your username and password do not match';
      echo'<a  href="index.php"> login again </a>' ;
}else{
	
	$_SESSION['name']=$_POST['uname']   ;
	
	header("Location:home.php") ;
}


?>
</body></html>