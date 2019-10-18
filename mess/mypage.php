<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" , initial scale=1.0>
    <meta name="author" content="Nitin Vankadari">  
    <title>Form</title>
</head>

<style>

    body {
        background-color:#2E4053 ;
        text-align: center;
        padding: 0;
        overflow: hidden;
    }

    #rotate {
        transform: rotate(-90deg);
        margin-top: 180px;
    }

    #login,
    #form {
        display: inline;
    }

    #box {
        margin-top: 210px;
        display: inline-block;
        background-color: white;
        width: 38vw;
        height: 450px;
        border: 1px solid;
        min-width: 350px;
        border-top-right-radius:15px;
        border-top-left-radius:15px;
        border-bottom-right-radius:15px;
        border-bottom-left-radius:15px;
    }

    #login {
        text-align: center;
        background-color: darkgray;
        height: 100%;
        width: 40%;
        float: left;
        color: white;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 110px;
        font-weight: bold;
        border-top-right-radius:15px;
        border-top-left-radius:15px;
        border-bottom-right-radius:15px;
        border-bottom-left-radius:15px;
    }

    #welcome {
        font-size: 34px;
    }

    #form {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        width: 60%;
        height: 100%;
        float: right;
        margin-top: 50px;
    }

    #submit {
        border-radius: 25px;
        background-color: #13a100;
        color: white;
        border-width: 0;
        padding: 10px 30px;
    }
    #box2
    {
       padding: 30px;
    }
    .input {
        border-radius: 25px;
        border-width: 2px;
        padding: 10px;
        width: 60%;
        font-size: 18px;
    }

    #outer {
        position: absolute;
        top: -0.2%;
        left: -0.2%;
        width: 101%;
        background-color:#5D6D7E;
        border: #888888 solid 1px;
        height: auto;
        overflow-wrap: break-word;
    }
    #inner {
        padding-top: 15px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 130px;
        width: 80%;
        border: white solid 2px;
        height: auto;
        color: white;
        word-wrap: break-word;
    }
    #pass_input
    {
        margin-bottom: 17px;
    }
    #heading
    {
        margin: 0px;
        font-size: 600;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 70px;
        font-weight: bold;
        margin-bottom: 5px;
    }
</style>

<body>
        <?php
    $connection = mysqli_connect("localhost","root","");
    if($connection)
    {
        echo "CONNECTED";
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
    $ViewQuery = "SELECT * FROM student";
    $Execute = mysqli_query($ViewQuery);
    while($DataRows = mysqli_fetch_array($Execute))
    {
        $Username=$DataRows['username'];
        $Password=$DataRows['password'];
        $Room_no=$DataRows['room_no'];
        $Phone=$DataRows['contact_no'];
        $Balance=$DataRows['balance'];
        $Mess_name=$DataRows['mess_name'];
    }
    ?>
    <div>
        <div id="outer">
            <div id="inner">
                    <p id="heading">MESS IT UP</p>     
                </div>
            </div>
            <div id="box2">
                    <div id="box">
                        <div id="login">
                            <p id="rotate">LOGIN</p>
                        </div>
                        <div id="form">
                            <p id="welcome">
                                WELCOME
                            </p>
                            <form action="login.php" method="POST">
                                <input type="text" name="username" class="input" placeholder="Username" />
                                <br><br>
                                <input id="pass_input" type="password" name="password" class="input" placeholder="Password" />
                                <br>
                                <a href="https://vinnovateit.com/">Contact Us</a> | <a href="/signup">SignUp</a>
                                <br><br>
                                <button id="submit" type="submit">LOGIN</button>
                            </form>
                        </div>
                </div>
        </div>
    </div>
</body>

</html>