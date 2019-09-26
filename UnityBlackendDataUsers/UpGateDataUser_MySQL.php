<?php
//ไว้ไช้สำหรับการอัพเดตข้อมูลผู้ใช้ใน mysql
require 'ConnectionSettingsUserUnity.php';
 
$uss 	= @ $_POST["uss"];   
$uskit =  @ $_POST["uskit"];
$uswop =  @ $_POST["uswop"];
$lvkit =  @ $_POST["lvkit"];
$lvwop =  @ $_POST["lvwop"];

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
    $sql = " UPDATE datausers SET parts_kit = '".$uskit."', parts_weapom = '".$uswop."', level_kit = '".$lvkit."', level_weapom = '".$lvwop."'  WHERE  id ='".$uss."' ";

    if ($connect->query($sql) === TRUE) {
        echo "200"; //sucass
        }  
    else {
    // echo "Error updating record: " . $connect->error;   //no sucass
    echo "400";
    }

$connect->close();
}
     


?>