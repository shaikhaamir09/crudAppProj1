<?php

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone'") or die (mysql_error());

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
?>
