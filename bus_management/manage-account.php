<!-- Imtiaz Ahmed
Bus Management
Manage Account
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
        if(isset($_SESSION['NN'])){
            $name__ = $_SESSION['N'];
            $name___ = $_SESSION['NN'];
            $email__ = $_SESSION['E'];
            $phone__ = $_SESSION['P'];
            $pass__ = $_SESSION['PA'];
            ?>
    <div class="text">
        <h1 class="wel"><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span><span> </span><?php echo "$name__"?></h1>
    </div>
    <div class="text1">
    <?php
    echo '<tr>
    <td>'.$name___.'</td>
    <td>'.$email__.'</td>
    <td>'.$phone__.'</td>
    <td>'.$pass__.'</td>
    <td>  </td>';
}
?>
<br>
</div>
<?php
    echo '<td><button class="user-update"><a href="user-update.php?updatephone='.$phone__.'"> INFORMATION UPDATE </a></button></td>
    <td><button class="user-delete"><a href="user-delete.php?deletephone='.$phone__.'"> DELETE ACCOUNT </a></button></td></tr>';
?>
<button class="user-back-submit"> <a href="welcome.php"> BACK </a> </button>
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
        .text1{
            animation: animate1 5s linear infinite;
            color: #0e3742;
            letter-spacing: 5px;
            font-size: 1.7rem;
            margin-top: 100px;
            margin-right: 0;
            margin-left: 0;
            margin-bottom: 0;
            font-weight: bolder;
            font-family: sans-serif;
            text-align: center;
        }
        h1{
            margin-top: 20px;
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
        .user-update{
            margin-top: 152px;
            margin-left: 395px;
            position: absolute;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #13A570;
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
        .user-update:hover{
            color: #13A570;
            background-color: #13A570;
            text-shadow: 0 0 10px #13A570;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .user-delete{
            margin: 152px 405px 520px 765px;
            padding: 5px;
            height: 70px;
            width: 350px;
            background-color: #DA1919;
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
        .user-delete:hover{
            color: #DA1919;
            background-color: #DA1919;
            text-shadow: 0 0 10px #DA1919;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        .user-back-submit{
            position: absolute;
            margin: -500px 0 0 600px;
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
        .user-back-submit:hover{
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
    <!-- <button class="user-update"> <a href="user-update.php"> INFORMATION UPDATE </a></button>
    <button class="user-delete"> <a href="user-delete.php"> ACCOUNT DELETE </a></button> -->
</body>
</html>