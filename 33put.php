<?
include('conn.php')
$sql='select * from `add`';
$res=$dbh->prepare($sql);
$res->execute();
$message=$res->fetchAll(PDO::FETCH_ASSOC);
?>