<!-- Imtiaz Ahmed
Bus Management
Homepage File
@date : 21/12/2021 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS MANAGEMENT</title>
</head>
<body>
    <h1>BUS MANAGEMENT</h1>
    <style>
        body{
            background-image: url("assets/bus.jpg");
            background-repeat: repeat;
            -webkit-background-size: 1550px 760px;
            -moz-background-size: 1550px 760px;
            -o-background-size: 1550px 760px;
            background-size: 1550px 760px;
        }
        h1{
            margin-top: 100px;
            margin-left: 375px;
            color: #0e3742;
            letter-spacing: 5px;
            font-size: 4.5rem;
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
        .user-button{
            margin: 180px 2px 0 388px;
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
            cursor: grabbing;
            letter-spacing: 2px;
            cursor: grabbing;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .user-button:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .login-button{
            margin: 80px 5px 0 13px;
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
            cursor: grabbing;
            letter-spacing: 2px;
            cursor: grabbing;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .login-button:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .admin-r-button{
            margin-top: 270px;
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
            cursor: grabbing;
            letter-spacing: 2px;
            cursor: grabbing;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .admin-r-button:hover{
            color: #323232;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            transition-delay: 0s;
            letter-spacing: 3px;
        }
        .admin-l-button{
            margin: 20px 405px 520px 756px;
            padding: 5px;
            height: 70px;
            width: 350px;
            position: relative;
            background-color: #323232;
            color: white;
            text-align: center;
            font-size: 1.3rem;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 5%;
            cursor: grabbing;
            letter-spacing: 2px;
            cursor: grabbing;
            text-shadow: 0 0 2px #fff;
            overflow: hidden;
            transition: 0.2s;
        }
        .admin-l-button:hover{
            color: #fff;
            background-color: #323232;
            text-shadow: 0 0 10px #323232;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            transition-delay: 0s;
            letter-spacing: 3px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
    <button class="user-button"><a href="user.php"> USER REGISTRATION </a></button>
    <button class="login-button"><a href="login.php">USER LOGIN</a></button>
    <button class="admin-r-button"><a href="adminregistration.php">ADMIN REGISTRATION</a></button>
    <button class="admin-l-button"><a href="adminlogin.php">ADMIN LOGIN</a></button>
</body>
</html>