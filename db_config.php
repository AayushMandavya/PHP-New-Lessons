<?php

   $conn= new mysqli("localhost","root","","aayush");
    if($conn->connect_error){
        die($conn->connect_error);
    }

    
?>