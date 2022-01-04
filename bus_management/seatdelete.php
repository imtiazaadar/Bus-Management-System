<?php
    include 'connect.php';
    $bus_id=$_GET['seatdelid'];
    $sql = "SELECT * FROM bus_list_with_details";
    $result = mysqli_query($database, $sql);
    $verify = "SELECT * FROM user_info";
            $res = mysqli_query($database, $verify);
            while($row = mysqli_fetch_assoc($res)){
                $em = $row['EMAIL'];
                $findval = "SELECT User_Balance FROM balance WHERE User_Email='$em'";
                $res2 = mysqli_query($database, $findval);
                while($row2 = mysqli_fetch_assoc($res2)){
                    $bal = $row2['User_Balance'];
                    $totbal = $bal;
                }
            }
    while($row3 = mysqli_fetch_assoc($result)){
        if($row3['BUS_ID'] == $bus_id){
            $as = $row3['AVAILABLE_SEATS'];
            $ts = $row3['TOTAL_SEATS'];
            $price = $row3['PRICE'];
            $reser = $row3['RESERVE'];
            if($as == $ts){
                $as1 = $as;
                $newsql = "UPDATE bus_list_with_details SET RESERVE=0, AVAILABLE_SEATS=$as1 WHERE BUS_ID='$bus_id'";
                if(mysqli_query($database, $newsql)){
                    header('location:tickets.php');
                }
            }
            else{
                $as1 = $as + 1;
                if($totbal <= $bal){
                $bal = $bal + $price;
                $reser = $reser-1;
                if($reser < 0) $reser = 0;
                $newsql = "UPDATE bus_list_with_details SET RESERVE = $reser, AVAILABLE_SEATS=$as1 WHERE BUS_ID='$bus_id'";
                $sql2 = "UPDATE balance SET User_Balance=$bal";
                if(mysqli_query($database, $newsql)){
                    if(mysqli_query($database, $sql2)){
                        header('location:tickets.php');
                    }
                }
            }
            }
        }
    }
?>