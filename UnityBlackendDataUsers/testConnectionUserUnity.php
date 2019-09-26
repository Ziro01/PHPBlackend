<?php
require 'ConnectionSettingsUserUnity.php';

 if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    echo " connect_error ";
} 
// echo "Connected successfully <br>"; //เชื่อมต่อได้

$sql = "SELECT username,password,level,coins FROM datausers WHERE id=3 ";    //WHERE id=3 เช็ค id แสดง ข้อมูลผู้ใช้
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"]. " - password: " . $row["password"]. " - level: " . $row["level"]. " - coins: " . $row["coins"]. "<br>";
    }
} else {
    echo "not user";
}

$conn->close();

?>