<?php

session_start();
include 'dbh.php';

?>

<!docttype html>
<html>
<head>
<title> home </title>
 <link rel="stylesheet" href="style.css">
<style>
*{margin:0px; padding:0px;background-color: #dc0010c}
#main{ border:solid grey; margin-top:70px;border-radius: 30px;width:900px; height:730px; margin:100px auto;}
</style>
</head>
<body>

<u><div id="main" style="font-family: Lucida Calligraphy;" >

<h3 align ="center"style= "color:green; background-color:transarent;"><i> <u><?php echo $_SESSION['name']?>-online</h3></i><br><br></u></b>
<div style ="overflow:scroll;margin-bottom: 30px;width:900px; height:300" class="output"></U>


<?php

$sql  = "SELECT* FROM  posts"  ;
$result= $conn->query($sql);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		
		echo  "  " . $row["name"]. "<BR>" ."" .$row["msg"]."...." .$row["date"].  "<br>" ;
		echo "<br>" ;
		
}
}else{
	echo "0 results" ;
}
$conn->close();

?>

</div>
<form   style="font-family: Lucida Calligraphy;color:green;"method = "post"  action="send.php"><h3>
<textarea style = "width:800;height:40; box-shadow: 1px 1px green"name="msg" placeholder="type to send message....." class="from-control">
</textarea> <br><BR><input style="width:200px;height:30px;color:black;" type="submit"  value="SEND">
</form><br>
<form style="font-family: Lucida Calligraphy;color:green;"action="logout.php"><h3><br><br><br><br>
<button style="color:green; width:900;" type="submit"><br>
<h3><u style="font-family: Lucida Calligraphy;color:green; width:900;"  > Logout </u>
</form>
</div>
</body>
</html>