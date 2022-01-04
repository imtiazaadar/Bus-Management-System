<!-- Imtiaz Ahmed
Bus Management
Welcome File
@date : 21/12/2021 -->

<?php
    include 'connect.php';
    session_start();
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
    <?php
        $sql = "SELECT * FROM USER_INFO";
        $result = mysqli_query($database, $sql);
        while($row = mysqli_fetch_assoc($result)){
            if($row['EMAIL'] == $_SESSION['USER_EM']){
                $name = strtoupper($row['NAME']);
                $_SESSION['N'] = $name;
                $_SESSION['NN'] = $row['NAME'];
                $_SESSION['E'] = $row['EMAIL'];
                $_SESSION['P'] = $row['PHONE'];
                $_SESSION['PA'] = $row['PASSWORD'];
            }
        }
        if(isset($_SESSION['USER_EM'])){
    ?>
    <div class="text">
        <h1 class="wel"><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span><span> </span><?php echo "$name"?></h1>
    </div>
    <?php
    }
    ?>
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
        .text{
            text-align: center;
        }
        h1{
            margin-top: 40px;
            margin-left: 0;
            color: #0e3742;
            letter-spacing: 5px;
            font-size: 3rem;
            font-weight: bolder;
            font-family: sans-serif;
            animation: animate1 5s linear infinite;
        }
        h1 span{
            animation: animate1 3s linear infinite;
        }
        @keyframes animate {
            0%, 80%{
                color: #333;
                box-shadow: none;
            }
            100%{
                color: #fff;
                text-shadow: 0 0 10px #03bcf4,
                0 0 20px #03bcf4,
                0 0 40px #03bcf4,
                0 0 80px #fff,
                0 0 100px #03bcf4,
                0 0 120px #03bcf4;
            }
        }
        @keyframes animate1 {
            0%, 18%, 20%, 50.1%, 60%, 65.1%, 80%, 90.1%, 92%{
                color: #0e3742;
            }
            18.1%, 20.1%, 30%, 50%, 60.1%, 65%, 80.1%, 90%, 92.1%, 100%{
                color: #fff;
                text-shadow: 0 0 10px #03bcf4,
                0 0 20px #03bcf4,
                0 0 40px #03bcf4,
                0 0 80px #03bcf4,
                0 0 100px #03bcf4;

            }
        }
        .manage-account{
            margin: 160px 2px 0 388px;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #323232;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            letter-spacing: 2px;
            cursor: grab;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .manage-account:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .buy-tickets{
            margin: 60px 5px 0 13px;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #323232;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            letter-spacing: 2px;
            cursor: grab;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .buy-tickets:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .check-schedule{
            margin-top: 250px;
            margin-left: -724px;
            position: absolute;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #323232;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            letter-spacing: 2px;
            cursor: grab;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .check-schedule:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .bus-list{
            margin: 20px 405px 520px 757px;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #323232;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            letter-spacing: 2px;
            cursor: grab;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .bus-list:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .user-logout-submit{
            position: absolute;
            margin: -480px 0 0 590px;
            width: 300px;
            height: 70px;
            background-color: #C4073F;
            color: #fff;
            font-family: sans-serif;
            font-weight: bolder;
            font-size: 2rem;
            letter-spacing: 3px;
            border: 1px solid #C4073F;
            cursor: grab;
            border-radius: 6%;
            box-shadow: 0 0 10px black, 0 0 40px black;
            text-shadow: 0 0 1px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .user-logout-submit:hover{
            background-color: #C4073F;
            color: #fff;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            transition-delay: 0s;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
    <button class="manage-account"> <a href="manage-account.php"> MANAGE ACCOUNT </a></button>
    <button class="buy-tickets"> <a href="tickets.php"> BUY TICKETS </a></button>
    <button class="check-schedule"> <a href="checkschedule.php"> CHECK SCHEDULE </a></button>
    <button class="bus-list"> <a href="buslist.php"> BUS LIST WITH PRICE </a></button>
    <button class="user-logout-submit"> <a href="login.php"> LOGOUT </a> </button>
</body>
</html>