<?php
session_start();
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

include 'config.php';

//$query = "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}');";
//$r = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')" or die (mysql_error());

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$_SESSION['msg'] = "Record Saved Successfully.";
header("Location: http://localhost/crudAppProj1/index.php");

mysqli_close($conn);

?>
