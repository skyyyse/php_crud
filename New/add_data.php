<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] = "POST") {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $SQL="INSERT INTO student(`name`,`email`,`sex`)value('$name','$email','$sex')";
    $result=$conn->query($SQL);
    return header('location:index.php');
}

