<?php
 	session_start();
 	$you = $_SESSION['qwe'] ;
 	$temp_balance = $_SESSION['user_balance'] ;
 	// echo $_SESSION['qwe'] ;
?>
<?php
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
    if(isset($_POST['Submit']))
    {//to run PHP script on submit
    	echo "<h3 >THANK YOU FOR SHOPPING WITH US.</h3>";
	if(!empty($_POST['check_list'])){
		// echo "dasdads";
	// Loop to store and display values of individual checked checkbox.
	$bill_outstanding = 0;
	foreach($_POST['check_list'] as $selected){
		// echo $selected;
		$Order_arr = explode ("@", $selected);
		echo $Order_arr[0];
		echo $Order_arr[1];
		$bill_outstanding   = $bill_outstanding + number_format($Order_arr[1]);
		// echo $you;
		$Time_of_t = date ('d-m-y h:i:s');
		// echo $Time_of_t;
		// echo "boom clasp";
		$Query = "INSERT INTO transaction(dish,price,username,time_of_t) VALUES('$Order_arr[0]','$Order_arr[1]','$you','$Time_of_t')";
	    $execute = mysqli_query($connection,$Query);
	    if($execute)
	    {
	        // echo "TRANSACTION RECORDED";
	    }
	    else
	    {
	        // echo "TRANSACTION DETAILS NOT RECORDED";
	    }
	}
	$yumyumtum = $temp_balance - $bill_outstanding;
	echo $yumyumtum."</br>";
	echo $bill_outstanding."</br>";
	echo $temp_balance."</br>";
	}
	$UpdateQuery = "UPDATE student SET balance='$yumyumtum' WHERE username ='$you' ";
	$Execute = mysqli_query($connection,$UpdateQuery);
	if($Execute)
	{
		echo "money deducted";
	}	
	else
	{
		echo "money not deducted";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
		<link href="https://fonts.googleapis.com/css?family=Anton|Courgette&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#jumbotron_bg
		{
			background-image: url("2.jpg");
			background-size: contain;
			background-size: cover;
    		background-repeat: no-repeat;
    		background-position: center;
		}
		#nav_head
		{
			font-family: 'Anton', sans-serif;
			color : #464646;
		}
		#jumbotron_head
		{
			font-family: 'Anton', sans-serif;
			color : #464646;
		}
		#jumbo_content
		{
			font-family: 'Courgette', cursive;
		}
		#my_nav_bar
		{
			padding-top: 10px;
			font-size: 20px;
			padding: 10px;
			font-weight: 700;
			background-color: #34495E ;
		}
		a:hover, /* OPTIONAL*/
		a:visited,
		a:focus
		{text-decoration: none !important;}
		div
		{
			/*border : 2px solid red;*/
		}
		body
		{
			background-color: #34495E ;
		}
		#zero
		{
			margin-bottom: 0px;
		}
		#menu
		{
			background-color:#34495E  ;
			font-weight: 500;
			font-size: 25px;
			margin-bottom: 20px;
		}
		.col-lg-3
		{
			/*border:3px solid #85C1E9 ;*/
			padding: 9px;
			padding-left: 20px;
			font-family: 'Anton', sans-serif;
		}
		#qwerty
		{
			margin-left: 90px;
		}
		#submit_button
		{
			  display: flex;
			  align-items: center;
			  justify-content: center;
			/*border: 2px solid red;*/
			margin-bottom: 20px;
		}
		#yumyum
		{
				border-top-right-radius:15px;
		        border-top-left-radius:15px;
		        border-bottom-right-radius:15px;
		        border-bottom-left-radius:15px;
		        font-size: 30px;
		        font-family: 'Anton', sans-serif;
		}
		#card_dish
		{
			margin: 5px;
		}
	</style>

</head>
<body>
	<div class="row" id="my_nav_bar">
		<div class="col-lg-1"><p style="color:white" id="zero">W I M P Y</p></div>
		<a href="profile.php"><div class="col-lg-1">ProfileView</div></a>
		<a href="transactions.php"><div class="col-lg-1">Transactions</div></a>
		<a href="mess_info.php"><div class="col-lg-1"> MessInfo</div></a>
	</div>
		<div class="jumbotron jumbotron-fluid"   id="jumbotron_bg">
  			<div class="container" >
    	        <h1 class="display-4" id="jumbotron_head">MESS IT UP</h1>
    			<p class="lead" id="jumbo_content">This is a money managment service for paid food mall which makes cumbersome process of simply buying food smooth easy and lighting fast</p>
  			</div>
		</div>
		<form action="home.php" method="POST">
				<div id="menu" class="container">
					<?php

					 $ViewQuery = "SELECT * FROM menu";
		               $Execute = mysqli_query($connection,$ViewQuery);
		               while($DataRows = mysqli_fetch_array($Execute))
		                {
		                    $Dish_type=$DataRows['dish_type'];         
		                    $Price = $DataRows['price'];
		                    $Dish = $DataRows['dish'];
		                    $Mess_name = $DataRows['mess_name'];
		            ?>
		            <div class="card" id="card_dish">
					  		<div class="card-body">
					    		<div id="dish" class="row">
				            	<div class="col-lg-3"><?php echo  $Dish ?></div>
				            	<div class="col-lg-3"><?php echo $Price?></div>
				            	<div class="col-lg-3"><?php echo $Dish_type ?></div>
				            	<div class="col-lg-3">
				            	<input id="qwerty" type="checkbox" name="check_list[]" value="<?php echo $Dish.'@'.$Price ?>"></div>
				            </div>
					  		</div>
					</div>
		            <?php  } ?>
				</div>
				<div id="submit_button" class="row">
					<input id="yumyum" value="BUY FOOD" type="submit" name="Submit">
				</div>
		</form>
</body>
</html>


<!-- insert into menu values('veg','30','rice','special');
insert into menu values('non-veg','40','chicken','special');
insert into menu values('veg','60','almonds','special');
insert into menu values('veg','30','sweet','special');
insert into menu values('veg','50','burger','special');
insert into menu values('non-veg','30','pizza','special');
insert into menu values('non-veg','30','roti','special'); 
insert into menu values('non-veg','20','daal','special'); 
insert into menu values('non-veg','80','chicken-pizza','special'); 
insert into menu values('non-veg','40','juice','special');  -->