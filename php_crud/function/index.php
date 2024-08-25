<?php 
include("../connection/connection.php");
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
    $search_condition = $search ? "WHERE student.name LIKE '%$search%'" : '';
    $student=$conn->query("SELECT student.*,school.title_school,subject.title_subject from student JOIN school on student.school=school.id JOIN subject on student.subject=subject.id $search_condition");
    $subject=$conn->query("SELECT * FROM `subject`");
    $school=$conn->query("SELECT * FROM `school`");
}