<?php
$conn = @new mysqli("127.0.0.1","root","123","restaurant");

if($conn->connect_errno){ //返回链接错误号
    die($conn->connect_error);
}

$sql = "insert into restaurants (name,description,description2) values('$_POST[name]','$_POST[description]','$_POST[description2]')";

$res = $conn->query($sql);
if($res){
    echo 1;
}else{
    echo mysqli_error($conn);
}

$conn->close();