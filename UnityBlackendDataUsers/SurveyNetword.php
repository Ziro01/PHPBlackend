<?php
require 'ConnectionSettingsUserUnity.php';

$usID 	= @$_GET["usID"];  

if ($connect->connect_error) {
    // die("Connection failed: " . $connect->connect_error);
    echo "no succass";
} 
else{
    echo "succass";

// $sql = "SELECT * FROM datausers WHERE id=$usID ";
// //if(id=>null){}
//     // else{

// $result = $connect->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "1";
//     }
// } 
// else {
// echo "00";
// }
$connect->close();

// //  }
// }

?>