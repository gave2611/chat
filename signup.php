<?php
include'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['Email'];
$password=$_POST['password'];



$sql ="insert into signup(username,email,password)
values('$uname','$email','$password')" ;
$result= $conn->query($sql);


header("Location:index.php") ;
echo 'you hav succesfully registerd';

?>