<?php
include 'config.php';
echo $id=$_GET['ID'];
mysqli_query($con,"DELETE FROM `todolist` WHERE id=$id");
header("location:index.php");
?>