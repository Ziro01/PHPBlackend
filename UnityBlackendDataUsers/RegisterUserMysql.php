<?php
require 'ConnectionSettingsUserUnity.php';

// $loginUser = @ $_POST["loginUser"];
$loginMail = @ $_POST["loginMail"];
$loginName = @ $_POST["loginName"];
$loginPass = @ $_POST["loginPass"];


// echo "$loginUser";
// echo "$loginPass";

//200 OK
//4xx :การเชื่อมต่อ 404 " การเชื่อมต่อล้มเหลว "// 403 " ไม่อนุญาติให้เชื่อมต่อ "
//5xx :เซิรืฟเวอร์ " 503 : เซิร์ฟเวอร์มีคนเข้าใช้งานมากเกิน" 503 : เซิร์ฟเวอร์ปิดปรับปรุง";

// if( $loginUser==null || $loginPass==null  ){echo "no data"; }

    if ($connect->connect_error) {
        // die("Connection failed: " . $conn->connect_error); 
        echo "404";  //Connection (การเชื่อมต่อ)
    } 
       
    
        $sql = "SELECT email  FROM datausers WHERE email = '".$loginMail."'";  
        $result = $connect->query($sql);
            if ($result->num_rows > 0) {             //เช็ค user ซ้ำ
            // output data of each row
            echo "201";
            } 
            else {
                // echo " Creating user... ";
            // echo "0 results";  //@add data user
                                            //1      2          3       4       5         6          7             8                 //   1               2                  3       4  5 6 7 8
            $sql2 = "INSERT INTO datausers (email,password,username,level,parts_kit,level_kit,parts_weapom,level_weapom) VALUES ('".$loginMail."','".$loginPass."','".$loginName."',1,0,1,0,1)";
            if ($connect->query($sql2) === TRUE) {          //เพิ่ม user
                echo "200";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $connect->error;
            }
        
        }
        
        
        $connect->close();
        



?>