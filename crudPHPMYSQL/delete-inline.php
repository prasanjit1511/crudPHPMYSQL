<?php
 $stu_id =$_GET['id'];

include 'confiq.php';

$sql="DELETE FROM student WHERE sid ={$stu_id}";
$result = mysqli_query($conn, $sql)or die("Query Unsuccesfull!");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
?>