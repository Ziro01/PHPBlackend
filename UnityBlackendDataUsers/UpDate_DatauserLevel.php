<?php
//ไว้ไช้สำหรับการอัพเดตข้อมูลผู้ใช้ใน mysql
require 'ConnectionSettingsUserUnity.php';

$usID = 2;
$usLe = 2 ;
$uscoi = 2;

echo "parts_kit".$usLe ."<br>";

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    echo " connect_error ";
} 

$sql = "UPDATE datausers SET parts_kit = $usLe ,parts_weapom='$usLe' WHERE id=$usID";

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();

?>