<?php
class connection
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;
    public function __construct($host = "localhost", $user = "root", $password = "", $database = "information_student")
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("" . $this->conn->connect_error);
        }
    }
}
class function_data extends connection{
    public $data_student;
    public $data_school;
    public $data_subject;
    public function student()
    {
        $sql = "SELECT student.*,school.title_school,subject.title_subject from student JOIN school on student.school=school.id JOIN subject on student.subject=subject.id";
        $data_student = $this->conn->query($sql);
        $this->data_student = $data_student;
    }
    public function get_school(){
        if($_SERVER['REQUEST_METHOD']="POST"){
            $sql = "SELECT * FROM `school`";
            $school=$this->conn->query($sql);
            while($row=$school->fetch_assoc()){
                $data['data'][]=$row;
            }
            echo json_encode($data);
        }
    }
    public function get_subject(){
        if($_SERVER['REQUEST_METHOD']="GET"){
            $sql = "SELECT * FROM `subject`";
            $subject=$this->conn->query($sql);
            while($row=$subject->fetch_assoc()){
                $data['data'][]=$row;
            }
            echo json_encode($data);
        }
    }
    public function store()
    {
        if($_SERVER['REQUEST_METHOD']="POST"){
            $name=$_POST['name'];
            $sex=$_POST['sex'];
            $email=$_POST['email'];
            $school=$_POST['school'];
            $date=$_POST['date'];
            $subject=$_POST['subject'];
            $sql="insert into student(name,sex,email,school,date,subject)values('$name','$sex','$email','$school','$date','$subject')";
            $result=$this->conn->query($sql);
            return header('location:../index.php');
        }
    }
    public function delete()
    {
        if($_SERVER['REQUEST_METHOD']="POST"){
            $id = $_POST['id'];
            $sql="delete from student where id='$id'";
            $result=$this->conn->query($sql);
            return header('location:../index.php');
        }
    }
    public function get_id(){
        if($_SERVER['REQUEST_METHOD']="GET"){
            $id = $_GET['id'];
            $sql="select student.* from student where id='$id'";
            $result=$this->conn->query($sql);
            $data[]=$result->fetch_array();
            echo json_encode($data);
        }
    }
    public function update(){
        if($_SERVER['REQUEST_METHOD']="POST"){
            $id=$_POST['student_id'];
            $name=$_POST['name'];
            $sex=$_POST['sex'];
            $email=$_POST['email'];
            $school=$_POST['school'];
            $subject=$_POST['subject'];
            $date=$_POST['date'];
            $sql="UPDATE `student` SET `name`='$name',`sex`='$sex',`email`='$email',`school`='$school',`subject`='$subject',`date`='$date' WHERE id='$id'";
            $result=$this->conn->query($sql);
            return header('location:../index.php');
        }
    }
}
$function_data=new function_data();