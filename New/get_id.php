<?php 
include 'connection.php';
if($_SERVER['REQUEST_METHOD']="GET"){
    $id = $_GET['id'];
    $sql="select * from student where id='$id'";
    $result=$conn->query($sql);
    $data[]=$result->fetch_array();
    echo json_encode($data);
}