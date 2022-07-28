<?php
include "config.php";
echo $LIST=$_POST['list'];	
print_r($LIST);
mysqli_query($con,"INSERT INTO `TODOLIST`(`list`) VALUES ('$LIST')");
header("location:index.php");
?>