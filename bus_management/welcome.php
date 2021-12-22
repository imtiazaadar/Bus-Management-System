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
    </style>
</body>
</html>