<?php
require "conn.php";
$user_name = "123";
$user_pass = "123";
$mysql_qry = "select * from data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0){
echo "login success";
}
else {
echo "login not success";
}
?>