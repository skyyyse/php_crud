<?php 
include '../function/connection.php';
if (isset($_POST['delete'])) {
    $function_data->delete();
}
else if(isset($_POST['store'])){
    $function_data->store();
}
else if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $function_data->get_id();
}
else if(isset($_POST['update'])){
    $function_data->update();
}
else if($_SERVER['REQUEST_METHOD']="POST") {
    $function_data->get_school();
}