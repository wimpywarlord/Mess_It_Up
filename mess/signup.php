<?php

if(isset($_POST['Submit']))
{
    $Username=$_POST['Username'];
    $Room_no=$_POST['Room_no'];
    $Password=$_POST['Password'];
    $Phone=$_POST['Phone'];
    $Mess_name=$_POST['Mess_name'];
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
    $x=5500;
    $Query = "INSERT INTO student(username,password,room_no,contact_no,balance,mess_name) VALUES('$Username','$Password','$Room_no','$Phone',$x,'$Mess_name')";
    $execute = mysqli_query($connection,$Query);
    if($execute)
    {
        echo "ACCOUNT CREATED";
    }
    else
    {
        echo "PLEASE ENTER CORRECT DETAILS";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , initial scale=1.0>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <meta name="author" content="Nitin Vankadari">
    <title>Form</title>
</head>

<style>
    body {
        background-color: #34495E ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        font-size: 45px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-align: center;
        background-image:  url("yolo.jpg");
    }

    #checkbox {
        text-align: left;
        margin-left: 25px;
        font-size: 18px;
    }

    .borderbox {
        display: inline-block;
        border: 1px solid white;
        background-color: rgba(45, 62, 80, 0.7);
        width: 35%;
        text-align: center;
        min-width: 330px;
    }

    .box {
        display: inline-block;
        border: none;
        background-color: white;
        color: black;
        margin-bottom: 30px;
        margin-top: 30px;
        width: 90%;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        font-weight: 100;
        border-radius: 10px;
    }

    #welcome {
        text-align: left;
        margin-left: 40px;
        font-size: 45px;
        font-weight: 500;
        font-family: 'Anton', sans-serif;
    }

    .inputs {
        border-radius: 30px;
        width: 90%;
        height: 40px;
        margin-bottom: 20px;
        font-size: 22px;
        padding-left: 20px;
    }

    #submit {
        background-color: rgb(17, 182, 17);
        color: white;
        padding: 10px;
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 25px;
        font-size: 20px;
        font-weight: bold;
        border-width: 0;
        margin-top: 10px;
        margin-bottom: 40px;
    }
    #heading
    {
        margin-bottom: 0px;
        font-size: 70px;
    }
    #yo
    {
        margin-bottom: 0;
    }

    #submit_button
    {
        margin-top: 20px;
        font-size: 28px;
        border-radius: 20px;
        padding: 4px;
        margin-bottom: 20px;
    }
</style>

<body>

    <h1 id="heading">SIGN UP</h1>
    <br>
    <div class="borderbox">
        <div class="box">
            <p id="welcome">WELCOME</p>
            <form action="signup.php" method="POST">
                <input type="text" name="Username" class="inputs" placeholder="User Name" />
                <br>
                <input type="text" name="Room_no" class="inputs" placeholder="Room Number" />
                <br>
                <input type="password" name="Password" class="inputs" placeholder="Password" />
                <br>
                <input name="Phone" id="yo" type="text" class="inputs" placeholder="Phone No" />
                <input name="Mess_name"  id="yo" style="margin-top: 15px" type="text" class="inputs" placeholder="Mess Name" />
                <input type="submit" name="Submit" id="submit_button">
            </form>
        </div>
    </div>
</body>

</html>