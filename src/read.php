<?php

require_once("./libs/utils.php");
require_once("./config/db.php");

$sql = "SELECT * FROM furniture ORDER BY id DESC";
$stmt = $conn->query($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>