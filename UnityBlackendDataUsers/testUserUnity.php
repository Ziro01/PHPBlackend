<?php
require 'ConnectionSettingsUserUnity.php';

//ใช้สำหรับการเช็คข้อมูล/ดึงข้อมูล
$uss 	= $_GET["uss"];  

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    // echo " connect_error ";
} 
else{
    // echo "ok <br>";
    $sql = "SELECT * FROM datausers WHERE id=$uss ";    //WHERE id=3 เช็ค id แสดง ข้อมูลผู้ใช้
    

    //if(id=>null){}
        // else{

    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

        echo $row["id"]."|". $row["playername"]."|".$row["level"]."|".$row["coins"];
        }
   } 
   else {
    echo "not user";
   }
   $connect->close();

//  }
}
?>