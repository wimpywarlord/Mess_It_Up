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
    	echo "UYMDSA S DAD ";
	if(!empty($_POST['check_list'])){
		echo "dasdads";
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['check_list'] as $selected){
	echo $selected."</br>";
		// echo "boom clasp";
	}
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
		html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
    display: block;
}
body {
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
*
{
    margin: 0;
    padding: 0;
}
div
{
    /*border:2px solid red;*/
}
		#jumbotron_bg
		{
			background-image: url("/2.jpg");
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
		        padding: 17px;
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
		<a href=""><div class="col-lg-1">ProfileView</div></a>
		<a href=""><div class="col-lg-1">Transactions</div></a>
		<a href=""><div class="col-lg-1"> MessInfo</div></a>
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
				            	<div class="col-lg-3"><?php echo $Mess_name?>
				            	<input id="qwerty" type="checkbox" name="check_list[]" value="<?php echo $Dish."@".$Price."@".$Dish_type?>"></div>
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
insert into menu values('non-veg','30','pizza','special'); -->
<!-- insert into menu values('non-veg','30','roti','special'); 
insert into menu values('non-veg','20','daal','special'); 
insert into menu values('non-veg','80','chicken-pizza','special'); 
insert into menu values('non-veg','40','juice','special');  -->