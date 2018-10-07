<?php
$conn = @new mysqli("127.0.0.1","root","123","restaurant");

if($conn->connect_errno){ //返回链接错误号
    die($conn->connect_error);
}

$sql = "select * from restaurants";

$res = $conn->query($sql);
$result = array();
while($row=$res->fetch_array()){
    array_push($result,array("name"=>$row['name'],"description"=>$row['description'],"description2"=>$row['description2']));
}
echo json_encode($result);

$res->close();
$conn->close();