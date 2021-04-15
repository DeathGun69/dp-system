<?php

    include "includes/db.php";  
    //echo "Есть подключение";  

    $name_socket = $_POST['name_socket'];
    $building = $_POST['building'];
    $auditories = $_POST['auditories'];
    $audit_serv = $_POST['audit_serv'];
    $rack = $_POST['rack'];
    $cross = $_POST['cross'];
    $port = $_POST['port'];

    echo $name_socket;
    echo $building;
    echo $auditories;
    echo $audit_serv;
    echo $rack;
    echo $cross;
    echo $port;

    //$result = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
   
?>