<?php
    include 'connect.php';
    if(isset($_POST['Submit'])){
        $id = $_POST['ID'];
        $brand = $_POST['BRAND'];
        $status = $_POST['STATUS'];
        $total = $_POST['TOTAL'];
        $available = $_POST['AVAILABLE'];
        $price = $_POST['PRICE'];
        $des = $_POST['DESTINATION'];
        $time = $_POST['start'];
        $sql = "INSERT INTO bus_list_with_details VALUES('$id', '$brand', '$status', $total, $available, $price, '$des', '$time')";
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
        <input class="bus-id" type="text" name="ID" value="" placeholder="BUS ID" required>
        <input class="brand" type="text" name="BRAND" value="" placeholder="BRAND" required>
        <input class="status" type="text" name="STATUS" value="" placeholder="STATUS" required>
        <input class="total" type="number" name="TOTAL" value="" placeholder="TOTAL SEATS" required>
        <input class="available" type="number" name="AVAILABLE" value="" placeholder="AVAILABLE" required>
        <input class="price" type="number" name="PRICE" value="" placeholder="PRICE" required>
        <input class="destination" type="text" name="DESTINATION" value="" placeholder="DESTINATION" required>
        <input class="start" type="text" name="start" value="" placeholder="START TIME" required>
        <input class="submit" type="submit" name="Submit" value="ADD BUS">
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
            margin: 522px 0 0px 950px;
            font-size: 4rem;
            color: #15AB74;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
        .bus-id{
            color: black;
            width: 700px;
            height: 50px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 4px solid #15AB74;
            margin-top: -20px;
            margin-left: 400px;
            font-family: sans-serif;
            font-weight: 500;
            font-size: 1.7rem;
        }
        .brand{
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
        .status{
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
        .total{
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
        .available{
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
        .price{
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
        .destination{
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
        .start{
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
            margin: 70px 0 0 580px;
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