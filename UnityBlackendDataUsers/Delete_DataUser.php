<?php
//ไว้ไช้สำหรับการลบข้อมูลผู้ใช้ใน mysql
require 'ConnectionSettingsUserUnity.php';

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

$sql = "DELETE FROM datausers WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$connect->close();

?>