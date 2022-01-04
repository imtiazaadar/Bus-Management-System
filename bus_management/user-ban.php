<?php
    include 'connect.php';
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
        <thead>
            <caption> <h1>USER LIST</h1></caption>
            <tr>
                <td class="td1">USERS</td>
                <td class="td1" colspan="1"> OPERATION </td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM user_info";
                $result = mysqli_query($database, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $user_name = $row['NAME'];
                    echo '<tr>
                        <td>'.$user_name.'</td>
                        <td><button id="del"><a href="user-del.php?username='.$user_name.'"> BAN </a></button></td></tr>';
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
        h1{
            font-weight: bolder;
            font-size: 2.7rem;
            font-family: Arial, Helvetica, sans-serif;
            color: #202020;
            text-align: center;
        }
        table{
            width: 100%;
            border-color: black;
            color: white;
        }
        .td1{
            color: #202020;
            font-weight: bolder;
            font-size: 1.4rem;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        td{
            color: white;
            font-weight: 1000;
            font-size: 1.4rem;
        }
        #del{
            width: 100%;
            background-color: #C4073F;
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
        #del:hover{
            color: #C4073F;
            background-color: #C4073F;
            text-shadow: 0 0 10px #C4073F;
            box-shadow: 0 0 10px #fff, 0 0 40px #fff;
            letter-spacing: 3px;
            transition-delay: 0s;
        }
        a{
            text-decoration: none;
            text-transform: uppercase;
            color: #fff;
        }
        .back{
            position: absolute;
            margin: 20px 0 0px 100px;
            font-size: 4rem;
            color: #C4073F;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
    </style>
        </tbody>
    </table>
</body>
</html>