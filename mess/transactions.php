<?php
    session_start();
    $Username = $_SESSION['qwe'];
    $connection = mysqli_connect("localhost","root","");
    if($connection)
    {
        // echo "CONNECTED";
    }
    else
    {
        echo "<h1> NOT CONNECTED </h1>";
    }
    $selected = mysqli_select_db($connection,'user');
    if($selected)
    {
        // echo  "<h1>selected db</h1>";
    }
    else{
        echo "not selected db";
    }
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
	<div class="row" id="heading_transaction">TRANSACTION HISTORY</div>
	<div id="rest_page_box">
		<div class="container" id="box_for_trans">
			<?php
		    $ViewQuery = "SELECT * FROM transaction";
		    $Execute = mysqli_query($connection,$ViewQuery);
		    $prev_check = "";
		    while($DataRows = mysqli_fetch_array($Execute))
		    {
		    	if($prev_check != $DataRows['time_of_t'] )
				{
					echo "<hr>";
				}
				if($DataRows['username'] == $Username)
				{
			?>
			<div class="row">
					<?php
					 echo "<b>DATE: </b>".$DataRows['time_of_t']." ";
					 ?>
					<?php
					 echo "<b>ITEM: </b>".$DataRows['dish']." "; 
					 ?>
					<?php
					 echo "<b>PRICE: </b>".$DataRows['price']."</br>";
					 ?>
					<?php
					 $prev_check = $DataRows['time_of_t'];
					 ?>
			</div>
			<?php
					}
			?>   

		    <?php
					}
			?>
			<hr>
		</div>

	</div>
</body>
</html>