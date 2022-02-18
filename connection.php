<?php
$servername = "localhost";
$user = "root";
$pwd = "";
$dbname = "stu_data";
$conn = new mysqli($servername,$user,$pwd,$dbname);
if($conn->connect_error){
    echo "Failed";
}else{
    echo "Connection Success";
}
?>