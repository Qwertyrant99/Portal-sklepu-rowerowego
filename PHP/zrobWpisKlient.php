<?php

if($wpis){
    include 'PHP\baza.php';
    $conn=new mysqli($serwer,$username,$password,$database);
    $query = "INSERT INTO klient(klient_login, klient_name)";
    $query .= "VALUES('".$klient_login."','".$klient_name."')";
    $conn->query($query);
    $conn->close();
}
?>