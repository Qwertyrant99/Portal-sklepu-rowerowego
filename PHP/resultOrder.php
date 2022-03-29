<?php
include 'PHP\baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "SELECT * FROM orders";
$rs = $conn->query($query);
$conn->close();
$num = $rs->num_rows;
?>