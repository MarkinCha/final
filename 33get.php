<?php
include('conn.php');
$name = $_POST['name'];
$comment = $_POST['comment'];
$sql = "insert into comment (name, comment) values('$name', '$comment')";
$dbh->exec($sql);
?>