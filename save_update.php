<?php include "./db_connect.php";

$edit_id = $_POST['edit_id'];
$name= $_POST['full_name'];

$conn->query("UPDATE `employees_info` SET `Name` = '$name' WHERE `id` = '$edit_id'");
?>