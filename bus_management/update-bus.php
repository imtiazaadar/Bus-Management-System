<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $id = $_POST['busid'];
        $stat = $_POST['busstatus'];
        $tseats = $_POST['bustseats'];
        $aseats = $_POST['busaseats'];
        $pr = $_POST['busprice'];
        $sql = "UPDATE bus_list_with_details SET STATUS='$stat', TOTAL_SEATS=$tseats, AVAILABLE_SEATS=$aseats, PRICE=$pr WHERE BUS_ID='$id'";
        if(mysqli_query($database, $sql)){
            header('location:adminwelcome.php');
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
    <script src="https://kit.fontawesome.com/86e77762e8.js" crossorigin="anonymous"></script>
</head>
<body>
<a class="back" href="adminwelcome.php"><i class="fas fa-chevron-circle-left"></i></a>
<form method="post">
        <input class="busclass" type="text" name="busid" value="" placeholder="Bus ID" required>
        <input class="busstatus" type="text" name="busstatus" value="" placeholder="Status" required>
        <input class="totalseatsclass" type="number" name="bustseats" value="" placeholder="Total Seats" required>
        <input class="availableseatsclass" type="number" name="busaseats" value="" placeholder="Available Seats" required>
        <input class="priceclass" type="number" name="busprice" value="" placeholder="Price" required>
        <input class="submit" type="submit" name="submit" value="UPDATE">
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
        .back{
            position: absolute;
            margin: 410px 0 0px 950px;
            font-size: 4rem;
            color: #15AB74;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
        .busclass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 40px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .busstatus{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 4px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .totalseatsclass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 4px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .availableseatsclass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 4px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .priceclass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 4px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .submit{
            margin: 80px 0 0 580px;
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
        .submit:hover{
            color: #15AB74;
            background-color: #fff;
            box-shadow: 0 0 10px #15AB74, 0 0 40px #15AB74;
            transition-delay: 0s;
        }
    </style>
</body>
</html>