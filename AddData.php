<?php
include('connection.php');

echo $_POST['name'];


$name =  $_POST['name'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$civilstat = $_POST['civilstat'];
$contactnum = $_POST['contactnum'];
$salary = $_POST['salary'];



$res = "INSERT INTO employeefile (fullname, address, birthdate, age, gender, civilstat, contactnum, salary) VALUES ('$name','$address','$birthdate','$age','$gender','$civilstat','$contactnum','$salary')";


mysqli_query($connect, $res);

// echo mysqli_query($connect, $res);

header("Location: index.php");
?>
