<!-- Imtiaz Ahmed
Bus Management
Connection File
@date : 21/12/2021 -->

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database_name = "bus management";
    $database = mysqli_connect($host, $user, $pass, $database_name);
    // if(!$database) {
    //     die("Connection failed". mysqli_connect_error());
    // }
    // else{
    //     echo "Connected <br>";
    // }
    // $sql = "CREATE TABLE ADMIN_INFO(NAME VARCHAR(30) NOT NULL, EMAIL VARCHAR(50) NOT NULL, PHONE VARCHAR(15) NOT NULL PRIMARY KEY, PASSWORD VARCHAR(40) NOT NULL)";
    // if(mysqli_query($database, $sql)){
    //     echo "Table Has Been Created <br>";
    // }
    // else{
    //     echo "There is something wrong! <br>";
    // }
?>