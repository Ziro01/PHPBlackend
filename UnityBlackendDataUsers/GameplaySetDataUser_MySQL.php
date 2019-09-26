<?php
//ไว้ไช้สำหรับการอัพเดตข้อมูลผู้ใช้ใน mysql
require 'ConnectionSettingsUserUnity.php';
 
$uss 	= @ $_POST["uss"];  
$ulv 	= @ $_POST["ulv"];  
$uskit =  @ $_POST["uskit"];
$uswop =  @ $_POST["uswop"];

// echo "phpuss =".$uss;
// echo "_phpuskit=".$uskit;
// echo "_phpusWop=".$uswop;
// // echo "fffffffffffff";

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    echo " connect_error ";
} 
else{
    // $sql = " UPDATE datausers SET parts_kit = $uskit,parts_weapom = $uswop  WHERE id = $uss ";
    $sql = " UPDATE datausers SET level = '".$ulv."', parts_kit = '".$uskit."', parts_weapom = '".$uswop."'  WHERE  id ='".$uss."' ";

    if ($connect->query($sql) === TRUE) {
        echo "Record updated successfully"; //sucass
        }  
    else {
    echo "Error updating record: " . $connect->error;   //no sucass
    }

$connect->close();
}
     


?>