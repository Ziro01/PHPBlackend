<?php
require 'ConnectionSettingsUserUnity.php';

//ใช้สำหรับการเช็คข้อมูล/ดึงข้อมูล

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo " connect_error ";
} 
else{
    // echo "ok <br>";
    $sql = "SELECT id,username,password,playername,level,coins FROM datausers WHERE id=3 ";    //WHERE id=3 เช็ค id แสดง ข้อมูลผู้ใช้
    
    //if(id=>null){}
        // else{

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "-id:".$row["id"]." -username:".$row["username"]." -password: ".$row["password"]."-nameplayer:".$row["playername"]." -level: ".$row["level"]." -coins:".$row["coins"]."<br>";
        }
   } 
   else {
    echo "not user";
   }
   $conn->close();

//  }
}
?>