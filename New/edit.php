<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['ids'];
    $name = $_POST['names'];
    $sex = $_POST['sexs'];
    $email = $_POST['emails'];
    $sql = "UPDATE `student` SET `name`='$name',`sex`='$sex',`email`='$email' WHERE id='$id'";
    $result = $conn->query($sql);
    return header('location:index.php');
}
