<?php
    include 'connect.php';
    session_start();
    if(isset($_POST['Login'])){
        if(empty($_POST['Email']) || empty($_POST['Password'])){
            header("location: adminlogin.php?Empty=PLEASE FILL ALL THE FIELDS !");
        }
        else{
            $query = "SELECT * FROM ADMIN_INFO WHERE EMAIL='".$_POST['Email']."' AND PASSWORD='".$_POST['Password']."'";
            $result = mysqli_query($database, $query);
            if(mysqli_fetch_assoc($result)){
                $_SESSION['USER_EM'] = $_POST['Email'];
                header('location: adminwelcome.php');
            }
            else{
                header("location: adminlogin.php?Invalid=INVALID EMAIL OR PASSWORD !");
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
    <title>BUS MANAGEMENT</title>
    <script src="https://kit.fontawesome.com/86e77762e8.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>ADMIN  LOGIN</h1>
    <form method="post">
        <a class="u" href="#"><i class="fas fa-user"></i></a>
        <input class="user-login-email" type="email" name="Email" value="" placeholder="Email">
        <a class="p" href="#"><i class="fas fa-key"></i></a>
        <input class="user-login-password" type="password" name="Password" value="" placeholder="Password">
        <input class="user-login-submit" type="submit" name="Login" value="LOGIN">
        <a class="back" href="homepage.php"><i class="fas fa-chevron-circle-left"></i></a>
    </form>
    <?php
        if(@$_GET['Empty'] == true){
            ?>
                <h3><?php echo $_GET['Empty']?></h3>
            <?php
        }
        // header('location: login.php');
        ?>
    <?php
        if(@$_GET['Invalid'] == true){
            ?>
                <h3><?php echo $_GET['Invalid']?></h3>
            <?php
        }
        // header('location: login.php');
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
        ::placeholder{
            color: #606060;
            font-size: 1.7rem;
            font-weight: 300;
        }
        input{
            padding-left: 10px;
        }
        input:focus{
            box-shadow: 0 0 10px #C4073F;
            border-top-color: #C4073F;
            border-left-color: #C4073F;
            border-right-color: #C4073F;
            outline-color: #C4073F;
        }
        a{
            text-decoration: none;
            color: white;
        }
        h1{
            margin-top: 60px;
            margin-left: 555px;
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
        h3{
            color: red;
            background-color: #fff;
            width: 700px;
            font-size: 1.2rem;
            padding-left: 10px;
            padding-top: 2px;
            font-weight: 400;
            height: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid #C4073F;
            font-family: sans-serif;
            margin-top: -168px;
            margin-left: 400px;
        }
        .user-login-email{
            color: black;
            width: 700px;
            height: 70px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #C4073F;
            margin-top: 40px;
            margin-left: 400px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-login-password{
            color: black;
            width: 700px;
            height: 70px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #C4073F;
            margin-top: 3px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .user-login-submit{
            margin: 100px 0 0 570px;
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
        .user-login-submit:hover{
            background-color: #fff;
            color: #C4073F;
            box-shadow: 0 0 10px #C4073F, 0 0 40px #C4073F;
            transition-delay: 0s;
        }
        .u{
            position: absolute;
            font-size: 3rem;
            margin-top: 50px;
            margin-left: 335px;
            color: #FF0075;
            text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black;
        }
        .p{
            color: #FF0075;
            position: absolute;
            font-size: 3rem;
            margin-top: 130px;
            margin-left: -780px;
            text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black;
        }
        .back{
            position: absolute;
            margin: 100px 0 0px 100px;
            font-size: 4rem;
            color: #15AB74;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
    </style>
</body>
</html>