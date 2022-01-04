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
<a class="back" href="welcome.php"><i class="fas fa-chevron-circle-left"></i></a>
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
        .back{
            position: absolute;
            margin: 25px 0 0px 100px;
            font-size: 4rem;
            color: #C4073F;
            font-weight: bolder;
            transition: 2s;

        }
        .back:hover{
            transform: scale(1.2);
        }
    </style>
    <table align="center" border=2px solid>
        <thead>
            <caption> <h1>CHECK SCHEDULE</h1></caption>
            <tr>
                <td class="td1">BRAND</td>
                <td class="td1">STATUS</td>
                <td class="td1">TOTAL SEATS</td>
                <td class="td1">AVAILABLE SEATS</td>
                <td class="td1">RESERVE</td>
                <td class="td1">PRICE</td>
                <td class="td1">DESTINATION</td>
                <td class="td1">TIME</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM bus_list_with_details";
                $result = mysqli_query($database, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $brand = $row["BRAND"];
                    $status = $row["STATUS"];
                    $totalseats = $row["TOTAL_SEATS"];
                    $availableseats = $row["AVAILABLE_SEATS"];
                    $reserve = $row["RESERVE"];
                    $price = $row["PRICE"];
                    $dest = $row["DESTINATION"];
                    $time = $row["START_TIME"];
                    if($availableseats > 0){
                        echo '<tr>
                        <td>'.$brand.'</td>
                        <td>'.$status.'</td>
                        <td>'.$totalseats.'</td>
                        <td>'.$availableseats.'</td>
                        <td>'.$reserve.'</td>
                        <td>'.$price.'</td>
                        <td>'.$dest.'</td>
                        <td>'.$time.'</td> </tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>