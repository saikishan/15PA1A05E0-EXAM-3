<?php
    $conn = mysqli_connect("localhost","root","","olx");
    if(!$conn){
        echo 'DB connection failed';
    }
?>