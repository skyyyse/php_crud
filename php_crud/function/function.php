<?php 
include("../connection/connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    switch($_POST["action"]){
        case "store":store($conn);break;
        case "delete":delete($conn);break;
        case "update":update($conn);break;
        case "getdata":getdata($conn);break;
    }
}
function store($conn){
    if($_SERVER['REQUEST_METHOD']="POST"){
        $code = date('YmdHis');
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $date=$_POST['date'];
        $subject=$_POST['subject'];
        if($name==null|| $sex==null||$email==null||$school==null||$date==null||$subject==null){
            return header('location:../index.php');
        }else{
            $sql="insert into student(name,sex,email,school,date,subject,code)values('$name','$sex','$email','$school','$date','$subject','$code')";
            $result=$conn->query($sql);
            return header('location:../index.php');
        }
    }
}
function delete($conn){
    if($_SERVER['REQUEST_METHOD']= 'POST'){
        $id=$_POST['id'];
        $student=$conn->query("delete from student where id='$id'");
        if($student){
            return header('location:../index.php');
        }
    }
}
function update($conn){
    if($_SERVER['REQUEST_METHOD']="POST"){
        $id=$_POST['student_id'];
        $name=$_POST['name'];
        $sex=$_POST['sex'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $subject=$_POST['subject'];
        $date=$_POST['date'];
        $sql="UPDATE `student` SET `name`='$name',`sex`='$sex',`email`='$email',`school`='$school',`subject`='$subject',`date`='$date' WHERE id='$id'";
        $result=$conn->query($sql);
        if($result){
            return header('location:../index.php');
        }
    }
}
function getdata($conn)
{
    if($_SERVER['REQUEST_METHOD']="POST"){
    $id=$_POST['id'];
    $sql = $conn->query("select * from student where id='$id'");
    $data['data']= $sql->fetch_assoc();
    echo json_encode($data);
    }
}