<!-- Imtiaz Ahmed
Bus Management
User Delete File
@date : 21/12/2021 -->

<?php
    include 'connect.php';
    if(isset($_GET['deletephone'])){
        $phone = $_GET['deletephone'];
        $sql = "DELETE FROM USER_INFO WHERE PHONE = $phone";
        if(mysqli_query($database, $sql)){
            header('location: login.php');
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
</head>
<body>
</body>
</html>