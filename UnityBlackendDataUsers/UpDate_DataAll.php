<?php
//ไว้ไช้สำหรับการอัพเดตข้อมูลผู้ใช้ใน mysql
require 'ConnectionSettingsUserUnity.php';

$usID = 4;
// $usMail = ;
// $usName   = "user04";
// $usLevel  = 2;
// $uscoin   = 2;
// $uspartsK = 2;
   $usLevelK = 1;
// $uspartsP = 2;
// $usLevelP = 2;

// echo "parts_kit".$usLevel ."<br>";

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    echo " connect_error ";
} 

$sql = "UPDATE datausers 
 SET 

 level_kit    = '$usLevelK'
  
 
WHERE id=$usID";

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();

?>
<!-- level        = '$usLevel',
  coins        = '$uscoin',
 parts_kit    = '$uspartsK',
 level_kit    = '$usLevelK',
 parts_weapom = '$uspartsP',
 level_weapom = '$usLevelP',
 parts_weapom = '$uscoin' 
 playername   = '$usName'-->