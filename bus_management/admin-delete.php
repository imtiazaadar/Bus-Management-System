<!-- Imtiaz Ahmed
Bus Management
Admin Delete File
@date : 21/12/2021 -->

<?php
    include 'connect.php';
    if(isset($_GET['admindeletephone'])){
        $phone = $_GET['admindeletephone'];
        $sql = "DELETE FROM ADMIN_INFO WHERE PHONE = $phone";
        if(mysqli_query($database, $sql)){
            header('location: adminlogin.php');
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