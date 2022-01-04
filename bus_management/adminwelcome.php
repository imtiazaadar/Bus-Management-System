<!-- Imtiaz Ahmed
Bus Management
Admin Welcome File
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
        $sql = "SELECT * FROM ADMIN_INFO";
        $result = mysqli_query($database, $sql);
        while($row = mysqli_fetch_assoc($result)){
            if($row['EMAIL'] == $_SESSION['USER_EMM']){
                $name = strtoupper($row['NAME']);
                $_SESSION['AN'] = $name;
                $_SESSION['ANN'] = $row['NAME'];
                $_SESSION['AE'] = $row['EMAIL'];
                $_SESSION['AP'] = $row['PHONE'];
                $_SESSION['APA'] = $row['PASSWORD'];
            }
        }
        if(isset($_SESSION['USER_EMM'])){
    ?>
    <div class="text">
        <h1 class="wel"><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span><span> </span><?php echo "$name"?></h1>
    </div>
    <?php
    }
    ?>
    <style>
        body{
            margin-top: 50px;
            padding: 20px;
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
            margin: 80px 2px 0 388px;
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
        .ban-user{
            margin: -20px 5px 0 13px;
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
        .ban-user:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .add-reserve{
            margin-top: 170px;
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
        .add-reserve:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .add-bus{
            margin: 20px 405px 520px 756px;
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
        .add-bus:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .update-bus{
            margin: -500px -300px 0 388px;
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
        .update-bus:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .update-schedule{
            position: absolute;
            margin: -500px 510px 0 756px;
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
        .update-schedule:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .user-logout-submit{
            position: absolute;
            margin: -400px 0 0 589px;
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
    <button class="manage-account"> <a href="admin-manage-account.php"> MANAGE ACCOUNT </a></button>
    <button class="ban-user"> <a href="user-ban.php"> BAN PASSENGER </a></button>
    <button class="add-reserve"> <a href="add-reserve.php"> ADD RESERVE </a></button>
    <button class="add-bus"> <a href="add-bus.php"> ADD BUS </a></button>
    <button class="update-bus"> <a href="update-bus.php"> UPDATE BUS </a></button>
    <button class="update-schedule"> <a href="update-schedule.php"> UPDATE SCHEDULE </a></button>
    <button class="user-logout-submit"> <a href="adminlogin.php"> LOGOUT </a> </button>
</body>
</html>