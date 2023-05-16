<!DOCTYPE html>
<html>
<head>
	<title>MAKE AN ORDER</title>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">My <p style="color: #e6b800; display: inline;">Profile</p></td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Order a Meal</a></li>
		<li><a href="user_room_status.php">Show Order Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><h2>TODAYS MENU</h2>
	<?php
			$con = new mysqli("localhost","root","", "iwp");
			if($con->connect_error)
			{
				die("Connection failed: ".$con->connect_error);
			}
			$sql = "SELECT * from meal";
			$result=mysqli_query($con,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">MEALS THAT WE OFFER</p></th>
				</tr>

    <tbody> 
	<tr><th>MEAL </th> <th>PRICE</th></tr>
        
    </tbody>

<?php

$con= new mysqli('localhost','root','','iwp');

$select="SELECT*FROM meal";
$query=mysqli_query($con,$select);
while($row=mysqli_fetch_array($query)){




?>
<tr>
	<td style="color:darkblue;"><?php echo $row['meal'];?></td>
	<td><?php echo $row['price'];?></td>
	

<?php

}

?>

</tr>
</table>
			</table><br><br>
			<form class="basic_box" action="queuestats.php" method="post">
				
						
			<table>
				
				<tr><div class="meal" style="text-align: center;">
				Enter Name of Meal:<br>
				<input type="text" id="meal1" name="meal1" ><br><br><br>
				<input type="text" id="meal2" name="meal2" ><br><br><br>
				<input type="text" id="meal3" name="meal3" ><br><br><br>
				<input type="text" id="meal4" name="meal4" ><br><br><br>
				<input type="text" id="meal5" name="meal5" ><br><br><br>
					</div>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
			<span style="margin-left: 43%"><input align="center" type="submit" value="submit Meal"></span>
			</form>

				
							
				</table>
			</form>
	</div>
</body>
</html>