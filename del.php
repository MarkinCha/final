<?php
include('conn.php');
$name = $_POST['del'];
$comment = $_POST['comment'];
$sql = "DELETE FROM comment WHERE name = '$name' ";
$dbh->exec($sql);
?>