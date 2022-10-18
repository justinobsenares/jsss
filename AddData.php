<?php
include('connection.php');



$name =  $_POST['name'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$civilstat = $_POST['civilstat'];
$contactnum = $_POST['contactnum'];
$salary = $_POST['salary'];
$active = $_POST['active'];



$res = "INSERT INTO employeefile (fullname, address, birthdate, age, gender, civilstat, contactnum, salary, isactive) VALUES ('$name','$address','$birthdate','$age','$gender','$civilstat','$contactnum','$salary','$active')";


mysqli_query($connect, $res);

// echo mysqli_query($connect, $res);

header("Location: index.php");


?>
