<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']="POST"){
    $id=$_POST['id'];
    $sql="DELETE FROM student where id='$id'";
    $result=$conn->query($sql);
    return header('location:index.php');
}