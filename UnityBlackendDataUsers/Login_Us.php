<?php
require 'ConnectionSettingsUserUnity.php';

$uss 	=@ $_GET["uss"];
$pass 	=@ $_GET["pass"];
	
	//400 = ไม่สามารถเชื่อมต่อเซิพเวอร์ได้
	//401 = User หรือ Password ไม่ถูกต้อง
	
	//200 = เข้าสู่ระบบสำเร็จ
	//201 = กรุณาใส่ User เเละ Password
	//202 = กรุณาใส่User หรือ Password
	
	if (!$connect)
	{	
		echo "400";	
	}
	else
	{
        // SELECT *
		$sql = "SELECT id,username,password FROM datausers WHERE username ='".$uss."' && password ='".$pass."'";
		$result = mysqli_query($connect,$sql);
		if (mysqli_num_rows($result)>=1)
		{
            echo "200";
            // echo "-id:".$row["id"];
		}
		else if ($uss == "" && $pass == "")
		{
			echo "201";
		}
		else if ($uss == "" || $pass == "")
		{
			echo "202";
		}
		else
		{
			echo "401";	
		}
		
	}




?>