<?php
include "config.php";
$List=$_POST['list'];
$Id=$_POST['id'];
mysqli_query($con,"UPDATE `todolist` SET `list`='$List' WHERE id=$Id");
header("location:index.php");
?>