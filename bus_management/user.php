<!-- Imtiaz Ahmed
Bus Management
Passenger Registration File
@date : 21/12/2021 -->

<?php
    include 'connect.php';
    if(isset($_POST['Submit'])){
        $user_name = $_POST['Name'];
        $user_email = $_POST['Email'];
        $user_phone = $_POST['Phone'];
        $user_password = $_POST['Password'];
        $user_con_password = $_POST['ConPassword'];
        if($user_password == $user_con_password){
            $sql = "INSERT INTO USER_INFO(NAME, EMAIL, PHONE, PASSWORD) VALUES('$user_name', '$user_email', '$user_phone', '$user_password')";
            if(mysqli_query($database, $sql)){
                $n = "DROP TABLE balance";
                mysqli_query($database, $n);
                $reserveinit = 0;
                $resinsert = "INSERT INTO reserve VALUES('$user_email', $reserveinit, 'sss')";
                mysqli_query($database, $resinsert);
                $new = "CREATE TABLE balance(User_Email VARCHAR(60) NOT NULL, User_Balance INT(15) NOT NULL)";
                $newsql = "INSERT INTO balance VALUES('$user_email', 1400)";
                if(mysqli_query($database, $new)){
                    if(mysqli_query($database, $newsql)){
                        header('location: homepage.php');
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/86e77762e8.js" crossorigin="anonymous"></script>
    <title>BUS MANAGEMENT</title>
</head>
<body>
    <h1>USER REGISTRATION</h1>
    <form method="post">
        <input class="user-name" type="text" name="Name" value="" placeholder="Full Name" required> <br>
        <input class="user-email" type="email" name="Email" value="" placeholder="Email" required> <br>
        <input class="user-phone" type="tel" name="Phone" value="" placeholder="Phone" required> <br>
        <input class="user-pass" type="password" name="Password" value="" placeholder="Password" required> <br>
        <input class="user-conpass" type="password" name="ConPassword" value="" placeholder="Confirm Password" required> <br>
        <input class="user-submit" type="submit" name="Submit" value="SUBMIT">
        <a class="back" href="homepage.php"><i class="fas fa-chevron-circle-left"></i></a>
    </form>
    <style>
        body{
            padding: 20px;
            background-image: url("assets/bus.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: 1550px 760px;
            -moz-background-size: 1550px 760px;
            -o-background-size: 1550px 760px;
            background-size: 1550px 760px;
        }
        ::placeholder{
            color: #606060;
            font-size: 1.7rem;
            font-weight: 300;
        }
        input{
            padding-left: 10px;
        }
        input:focus{
            box-shadow: 0 0 10px #15AB74;
            border-top-color: #15AB74;
            border-left-color: #15AB74;
            border-right-color: #15AB74;
            outline-color: #15AB74;
        }
        .user-submit:hover{
            color: #15AB74;
            background-color: white;
        }
        h1{
            margin-left: 435px;
            color: #0e3742;
            letter-spacing: 5px;
            font-size: 3rem;
            font-weight: bolder;
            font-family: sans-serif;
            animation: animate 5s linear infinite;
        }
        @keyframes animate {
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
        .user-name{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 70px;
            margin-left: 370px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-email{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 3px;
            margin-left: 370px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-phone{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 3px;
            margin-left: 370px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-pass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 3px;
            margin-left: 370px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-conpass{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: 3px;
            margin-left: 370px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-submit{
            margin: 70px 0 0 570px;
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
        .user-submit:hover{
            color: #15AB74;
            background-color: #fff;
            box-shadow: 0 0 10px #15AB74, 0 0 40px #15AB74;
            transition-delay: 0s;
        }
        .back{
            position: absolute;
            margin: 65px 0 0px 100px;
            font-size: 4rem;
            color: #C4073F;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
    </style>
</body>
</html>