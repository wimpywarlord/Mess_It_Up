<?php
	session_start();
    $temp_username = $_SESSION['user_username'] ;
    $temp_room_no = $_SESSION['user_room_no'] ;
    $temp_contact_no = $_SESSION['user_contact_no'] ;
    $temp_balance = $_SESSION['user_balance'];
   	$temp_mess_name  = $_SESSION['user_mess_name'] ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transactions</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Anton|Courgette&display=swap" rel="stylesheet">
	<style type="text/css">
		body
		{
			background-color: #34495E;
		}
		#heading_transaction
		{
			font-family: 'Anton', sans-serif;
			font-size: 60px;
			display: flex;
		    justify-content: center;
		    align-items: center;
			color: white;
		}
		.row
		{
			border: 0px solid red;
			display: flex;
		    justify-content: center;
		    align-items: center;
		}
		#box_for_trans
		{
			padding: 25px;
			background-color:  #F0F3F4;
		}
		#rest_page_box
		{
			margin: 80px;
		}
		#name_of_user
		{
			font-size: 50px;
			color: #3498DB ;
			font-family: 'Anton', sans-serif;
		}
		*
		{
			margin: 0px;
			padding: 0px;
		}
		#user_room_no
		{
			font-size: 20px;
			font-weight: 700;
		}
	</style>
</head>
<body>	
	<div class="row" id="heading_transaction">PROFILE VIEW</div>
	<div id="rest_page_box">
		<div class="container" id="box_for_trans">
			<div class= "row">
				<p id="name_of_user"><?php echo $temp_username ?></p>
			</div>
			<div class="row" id="user_room_no">
				<p>ROOM NUMBER : <?php echo $temp_room_no ?></p>
			</div>
			<div class="row" id="user_room_no">
				<p>CONTACT NUMBER : <?php echo $temp_contact_no ?></p>
			</div>
			<div class="row" id="user_room_no">
				<p>YOUR CURRENT BALANCE : <?php echo $temp_balance ?></p>
			</div>
			<div class="row" id="user_room_no">
				<p>MESS TYPE : <?php echo $temp_mess_name ?></p>
			</div>
		</div>
	</div>
</body>
</html>