<?php
require_once "../database/dbprojecweb2.php";
$id = $_GET['iddel'];
$sql = "DELETE FROM merk WHERE id = ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);

header("location:index.php");
?>