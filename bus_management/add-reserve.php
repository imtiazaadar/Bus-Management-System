<?php
    include 'connect.php';
    if(isset($_POST['Submit'])){
        $em = $_POST['Email'];
        $bus_id = $_POST['BusID'];
        $rese = $_POST['Seat'];
        $sql = "SELECT * FROM user_info WHERE EMAIL='$em'";
        $result = mysqli_query($database, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['EMAIL'];
        }
        $sql1 = "SELECT * FROM bus_list_with_details WHERE BUS_ID='$bus_id'";
        $result1 = mysqli_query($database, $sql1);
        while($newrow = mysqli_fetch_assoc($result1)){
            $totseat = $newrow['TOTAL_SEATS'];
            $reser = $newrow['RESERVE'];
            $av = $newrow['AVAILABLE_SEATS'];
        }
        if($rese < 0){
            $new_res = (int)$reser+((int)$rese);
            $new_av = (int)$av-((int)$rese);
        }
        else{
            $new_res = $reser+$rese;
            $new_av = $totseat-$new_res;
        }
        $upsql = "UPDATE bus_list_with_details SET AVAILABLE_SEATS=$new_av, RESERVE=$new_res WHERE BUS_ID='$bus_id'";
        mysqli_query($database, $upsql);
        $upsql1 = "SELECT * FROM reserve WHERE USER_EMAIL='$em'";
        $result2 = mysqli_query($database, $upsql1);
        while($r = mysqli_fetch_assoc($result2)){
            $emm = $r['USER_EMAIL'];
            $res = $r['RESERVE'];
        }
        $newsql = "UPDATE reserve SET RESERVE=$res + $rese, BUS_ID='$bus_id' WHERE USER_EMAIL='$em'";
        if(mysqli_query($database, $newsql)){
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
<table align="center" border=2px solid>
    <form method="post">
        <input class="useremail" type="text" name="Email" value="" placeholder="User Email" required><br>
        <input class="bus" type="text" name="BusID" value="" placeholder="Bus ID" required><br>
        <input class="seat" type="number" name="Seat" value="" placeholder="How Many Seat" required><br>
        <input class="submit" type="submit" name="Submit" value="ADD"><br>
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
            margin: 352px 0 0px 950px;
            font-size: 4rem;
            color: #15AB74;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
        .useremail{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 100px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .bus{
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
        .seat{
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