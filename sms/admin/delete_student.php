<?php
require_once 'dbcon.php';

$id = base64_decode($_GET['id']);

mysqli_query($db, "DELETE FROM student_info WHERE id = '$id'");

header('Location: index.php?page=all-students');
?>