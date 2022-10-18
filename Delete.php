<?php
session_start();
$con = mysqli_connect("localhost","root","","employeedb");

if(isset($_POST['stud_delete_btn']))
{
    $id = $_POST['delete_stud_id'];

    $query = "DELETE FROM employeefile WHERE recid='$id'";
    mysqli_query($con, $query);

        header("Location: index.php");
    }


?>