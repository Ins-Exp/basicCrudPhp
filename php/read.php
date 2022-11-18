<?php  

require_once("./libs/utils.php");
require_once("./config/db.php");

$sql = "SELECT * FROM furniture ORDER BY id DESC";
$result = mysqli_query($conn, $sql);