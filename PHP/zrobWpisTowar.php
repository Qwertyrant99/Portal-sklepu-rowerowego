<?php

if($wpis){
    include 'PHP\baza.php';
    $conn=new mysqli($serwer,$username,$password,$database);
    $query = "INSERT INTO towar(towar_nazwa, towar_cena)";
    $query .= "VALUES('".$towar_nazwa."','".$towar_cena."')";
    $conn->query($query);
    $conn->close();
}
?>