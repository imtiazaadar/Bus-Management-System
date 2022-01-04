<?php
    include 'connect.php';
    if(isset($_POST['Submit'])){
        $balan = $_POST['Balance'];
        $sql = "UPDATE balance SET User_Balance=$balan";
        if(mysqli_query($database, $sql)){
            header('location:tickets.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS MANAGEMENT</title>
</head>
<body>
    <form method="post">
        <input class="rec" type="text"  name="Balance" value="" placeholder="Write How"> <br>
        <input class="recbut" type="submit" name="Submit" value="RECHARGE">
    </form>
    <style>
         body{
            margin-top: 100px;
            background-image: url("assets/bus.jpg");
            -webkit-background-size: 1550px 760px;
            -moz-background-size: 1550px 760px;
            -o-background-size: 1550px 760px;
            background-size: 1550px 760px;
            background-repeat: repeat;
        }
        .rec{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 190px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .recbut{
            margin: 60px 0 0 580px;
            width: 300px;
            height: 60px;
            background-color: #15AB74;
            color: whitesmoke;
            font-family: sans-serif;
            font-weight: bolder;
            font-size: 2rem;
            letter-spacing: 5px;
            cursor: grabbing;
            border-radius: 8%;
            box-shadow: 0 0 10px black, 0 0 40px black;
            text-shadow: 0 0 1px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .recbut:hover{
            color: #15AB74;
            background-color: #fff;
            box-shadow: 0 0 10px #15AB74, 0 0 40px #15AB74;
            transition-delay: 0s;
        }
    </style>
</body>
</html>