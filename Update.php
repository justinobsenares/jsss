<?php
session_start();
$con = mysqli_connect("localhost","root","","employeedb");

if(isset($_POST['update_stud_data']))
{
    $id = $_POST['stud_id'];

    $name = $_POST['name'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $civilstat = $_POST['civilstat'];
    $contactnum = $_POST['contactnum'];
    $salary = $_POST['salary'];
    $active = $_POST['active'];

    $query = "UPDATE employeefile SET fullname='$name', address='$address', birthdate='$birthdate', age='$age', gender='$gender', civilstat='$civilstat', contactnum='$contactnum', salary='$salary', isactive='$active' WHERE recid='$id' ";
    $query_run = mysqli_query($con, $query);

    
    }
    
    header("Location: index.php");

?>