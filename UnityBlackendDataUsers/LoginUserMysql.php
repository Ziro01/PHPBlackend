<?php
require 'ConnectionSettingsUserUnity.php';


$loginUser = @ $_POST["loginUser"];
$loginPass = @ $_POST["loginPass"];

// echo "$loginUser.<br>";
// echo "$loginPass.<br>";

// 400  no connect   

// // Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

// if (!$connect_error)
// 	{
// 		echo "400";
// 	}
	
// Check connection
 if ($connect->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
    echo "404";   //error
} 
// echo "Connected successfully <br>";

$sql = "SELECT id,email,username,password FROM datausers WHERE email = '".$loginUser."'";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "username: " . $row["username"]. " - password: " . $row["password"]. " - level: " . $row["level"]. " - coins: " . $row["coins"]. "<br>";
        if(@ $row["password"]==$loginPass){
            // echo " Login Success ";
            echo "id"."|".$row["id"]."|".$row["username"];
        }
        else{
            echo "Error"."|"."2222"."|"."";  //pass Wrong Credentials.
        }
    }
} 
else {
    echo "Error"."|"."1111"."|".""; //No this user
}

$connect->close();

?>