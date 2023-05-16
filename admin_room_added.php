<html>
<?php

	$meal = $_POST["meal"];
	$price= $_POST["price"];

// HERE IS THE CONNECTION CODE TO YOUR DATABDASE
$con= new mysqli('localhost','root','','iwp');

if($con->connect_error){
	die('Connection Failed : '.$con->connection_error);
}else{
	$sql="INSERT INTO meal(meal,price) 
	VALUES(?,?)";
	$stmt=mysqli_stmt_init($con);
	if(! mysqli_stmt_prepare($stmt,$sql)){
		die(mysqli_error($con));
	}
	
	mysqli_stmt_bind_param($stmt, "si",
	$meal,
$price);
	mysqli_stmt_execute($stmt);
	
	
	{
		header("Location: admin_room_added1.php");
	};
}
?>
</html>