<?php
require 'ConnectionSettingsUserUnity.php';

$loginUser = @ $_POST["loginUser"];
$loginPass = @ $_POST["loginPass"];
$loginMail = @ $_POST["loginMail"];
$loginName = @ $_POST["loginName"];

// echo "$loginUser";
// echo "$loginPass";

//200 OK ,201 user <1
//4xx :การเชื่อมต่อ 404 " การเชื่อมต่อล้มเหลว "// 403 " ไม่อนุญาติให้เชื่อมต่อ "
//5xx :เซิรืฟเวอร์ " 503 : เซิร์ฟเวอร์มีคนเข้าใช้งานมากเกิน" 503 : เซิร์ฟเวอร์ปิดปรับปรุง";

// if( $loginUser==null || $loginPass==null  ){echo "no data"; }

    if ($connect->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        echo "404"; 
    } 
        // echo "Connection <br>";  //Connection (การเชื่อมต่อ)
    
        $sql = "SELECT username  FROM datausers WHERE username= '".$loginUser."'";  
        $result = $connect->query($sql);
            if ($result->num_rows > 0) {             //เช็ค user ซ้ำ
            // output data of each row
                echo "201";
            } 
            else {
                // echo " Creating user... ";
            // echo "0 results";  //@add data user
            $sql2 = "INSERT INTO datausers (email,username,password,playername,level,coins) VALUES ('".$loginMail."','".$loginUser."','".$loginPass."','".$loginName."',1,0)";
            if ($connect->query($sql2) === TRUE) {          //เพิ่ม user
                echo "200";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;  //เพิ่ม user Error
            }      
        }      
        
        $connect->close();

?>