<?php
session_start();
$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
$_SESSION['msg'] = "Record Deleted Successfully.";
header("Location: http://localhost/crudAppProj1/index.php");

mysqli_close($conn);

?>
