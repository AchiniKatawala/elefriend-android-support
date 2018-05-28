<?php
require "connectionEle.php";
$phone_number = $_POST["phone_number"];
$mysql_query = "select * from users where mobile_number like '$phone_number';";
$result = mysqli_query($conn ,$mysql_query);
echo $result;
if(mysqli_num_rows($result)>0){
	echo "success";
}
else{
	echo "not success";
}
?>