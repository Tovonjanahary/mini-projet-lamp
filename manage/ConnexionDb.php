<?php 
    $conn = mysqli_connect("localhost","Tovo","1234","Article");

    if(!$conn) {
        echo 'erreur de connection' . mysqli_connect_error();
    }
?>