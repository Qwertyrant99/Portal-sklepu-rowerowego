<?php

if($wpis){
    include 'PHP\baza.php';
    $conn=new mysqli($serwer,$username,$password,$database);
    $query = "INSERT INTO orders(klient_id, towar_id, quantity, price)";
    $query .= "VALUES('".$klient_id."','".$towar_id."','".$quantity."','".$price."')";
    $conn->query($query);
    $conn->close();
}
?>