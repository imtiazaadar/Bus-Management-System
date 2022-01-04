<?php
    include 'connect.php';
    $user_n = $_GET['username'];
    if(isset($user_n)){
        $sql = "DELETE FROM user_info WHERE NAME='$user_n'";
        if(mysqli_query($database, $sql)){
            header('location:user-ban.php');
        }
    }
?>